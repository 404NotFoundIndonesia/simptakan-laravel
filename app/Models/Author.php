<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone'];

    public function authors(): BelongsToMany {
        return $this->belongsToMany(Book::class, 'book_authors');
    }
}
