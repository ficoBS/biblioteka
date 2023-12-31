<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    use HasFactory;
    protected $table = "author";   

    public function napisanidela() {
        return  $this->belongsToMany(Books::class, 'author_has_books',  "author_id", "books_id");
    }


    public function slika() {
        return $this->belongsTo(Images::class,"images_id");
    }
}
