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
}
