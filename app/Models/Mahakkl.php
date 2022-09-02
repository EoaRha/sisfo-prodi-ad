<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahakkl extends Model
{
    use HasFactory;

    protected $table = 'mahakkl';
    protected $fillable = [
        'kode',
        'nama',
        'jurusan',
        'judul',
        'deskripsi',
        'status',
        'pembimbing',
    ];
}
