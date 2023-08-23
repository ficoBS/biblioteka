<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    use HasFactory;
    protected $table='rent';

    public function kniga() {
        return $this->belongsTo(Books::class, 'books_id');
    }

    public function slika() {
        return $this->belongsTo(Images::class,"images_id");
    }
}
