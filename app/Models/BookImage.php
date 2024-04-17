<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id', 'image',
    ];

    protected $appends = [ 'image_url' ];

    protected function imageUrl(): Attribute {
        return new Attribute(
            get: function() {
                if (is_null($this->image)) {
                    return asset('404_Black.jpg');
                }

                if (str_starts_with($this->image, 'http')) {
                    return $this->image;
                }

                // TODO: Replace with path to laravel storage
                return $this->image;
            }
        );
    }
}
