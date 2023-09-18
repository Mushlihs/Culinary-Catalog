<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = "comment";
    
    protected $fillable = [
        "user_id",
        "culinary_id",
        "comment_text",
        "rating",
    ];
}
