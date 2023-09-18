<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Culinary extends Model
{
    use HasFactory;

    protected $table = "culinary";
    protected $fillable = [
        "title",
        "photo_url",
        "description",
        "author_id",
    ];
}
