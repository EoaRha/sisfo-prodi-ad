<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'beritas';
    protected $fillable = [
        'judul',
        'slug',
        'penulis',
        'image',
        'deskripsi',
        'status',
        'trending',
        'meta_title',
        'meta_keywords',
        'meta_deskripsi',
    ];
}
