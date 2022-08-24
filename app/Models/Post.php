<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'excerpt', 'body']; //parameter yang bisa di ubah hanya yang ada di dalam tanda kurung.

    // protected $guarded = ['id']; //artinya ini tidak boleh di ubah selain itu bisa. 
}



