<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
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

    protected $appends = ['summary_limit'];

    protected function summaryLimit(): Attribute {
        return new Attribute(
            get: fn() => Str::limit($this->summary, 50)
        );
    }

    public function scopeSearch(Builder $query, string|null $search) {
        return $query->when($search, function(Builder $query) use ($search) {
            return $query->where('title', 'LIKE', $search . '%')
                ->orWhere('isbn', 'LIKE', $search . '%');
        });
    }

    public function scopeRender(Builder $query, int $size) {
        return $query->paginate($size)->withQueryString();
    }

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
