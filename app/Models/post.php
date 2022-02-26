<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fileable = ['created_at','updated_at'];
    protected $fillable = ['title','slug','category_id','author_id','description','image'];
    protected $date = [
        'published_at'
    ];
    use HasFactory;
}
