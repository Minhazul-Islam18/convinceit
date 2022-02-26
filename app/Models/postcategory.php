<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class postcategory extends Model
{
    protected $fileable = ['created_at','updated_at'];
    protected $fillable = ['title','slug','description'];
    protected $date = [
        'published_at'
    ];
    use HasFactory;
}
