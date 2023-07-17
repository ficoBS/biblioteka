<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;
    protected $table = 'books';

    public function pisatel() {
        return  $this->belongsToMany(Authors::class, 'author_has_books', "books_id", "author_id");
    }

    public function slika() {
        return $this->belongsTo(Images::class, 'images_id');
    }

    public function status() {
        return $this->belongsTo(Status::class, 'status_id');
    }

    public function kategorija() {
        return  $this->belongsToMany(Categories::class, 'books_has_categories', "categories_id", "books_id");
    }
}
