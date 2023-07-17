<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookUsers extends Model
{
    use HasFactory;
    protected $table = "users";

    public function profil() {
        return $this->belongsTo(Images::class,"images_id");
    }
}
