<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
    use HasFactory;

    protected $table = 'kategori';
    protected $fillable = [
        'name',
        'slug',
        'deskripsi',
        'status',
        'popular',
        'image',
        'meta_title',
        'meta_deskripsi',
        'meta_keywords',
    ];

    public function produk()
        {
            return $this->belongsTo(Product::class, 'id', 'kate_id');
        }
}
