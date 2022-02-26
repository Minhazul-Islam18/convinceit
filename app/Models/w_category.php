<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class w_category extends Model
{
    // protected $gurded = ["created_at", "updated_at", "deleted_at"];
    use HasFactory;
    // protected $table = 'w_categories';
    public $timestamps = false;
    protected $fillable = ['name','slug','description'];
}
