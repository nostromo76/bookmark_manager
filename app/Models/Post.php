<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // Corrected property name
    protected $fillable = [
        'link_name',
        'link',
        'login',
        'password',
    ];
}
