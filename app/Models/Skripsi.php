<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skripsi extends Model
{
    use HasFactory;
    
    protected $table = 'skripsis';
    protected $fillable = [
        'user_id',
        'nama_mahasiswa',
        'nomor_mahasiswa',
        'kelas',
        'judul',
        'deskripsi',
        'status',
        'pembimbing',
        'penguji',
        'catatan',
    ];
}
