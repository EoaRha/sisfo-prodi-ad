<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahaskripsi extends Model
{
    use HasFactory;

    protected $table = 'mahaskripsi';
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
