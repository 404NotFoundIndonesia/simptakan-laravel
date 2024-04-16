<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('summary')->nullable();
            $table->string('isbn', 13)->unique();
            $table->boolean('digital');
            $table->foreignId('publisher_id')->nullable()->constrained('publishers')->cascadeOnUpdate();
            $table->unsignedInteger('stock')->default(0);
            $table->year('published_year')->nullable();
            $table->unsignedBigInteger('price')->default(0);
            $table->string('link')->nullable();
            $table->timestamps();
        });

        Schema::create('book_images', function(Blueprint $table) {
            $table->id();
            $table->string('path');
            $table->foreignId('book_id')->constrained('books')->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('book_authors', function(Blueprint $table) {
            $table->id();
            $table->foreignId('author_id')->constrained('authors')->cascadeOnDelete();
            $table->foreignId('book_id')->constrained('books')->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('book_genres', function(Blueprint $table) {
            $table->id();
            $table->foreignId('genre_id')->constrained('genres')->cascadeOnDelete();
            $table->foreignId('book_id')->constrained('books')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_authors');
        Schema::dropIfExists('book_images');
        Schema::dropIfExists('books');
    }
};
