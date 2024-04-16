<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'summary', 'isbn', 'digital', 'price',
        'stock', 'published_year', 'publisher_id', 'link',
    ];

    public function images(): HasMany {
        return $this->hasMany(BookImage::class);
    }

    public function publisher(): BelongsTo {
        return $this->belongsTo(Publisher::class);
    }

    public function authors(): BelongsToMany {
        return $this->belongsToMany(Author::class, 'book_authors');
    }

    public function genres(): BelongsToMany {
        return $this->belongsToMany(Genre::class, 'book_genres');
    }
}
