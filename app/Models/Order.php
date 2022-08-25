<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderItem;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\BelongsTo;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $fillable = [
        'user_id',
        'fname',
        'lname',
        'email',
        'phone',
        'alamat',
        'provinsi',
        'tipe',
        'kota',
        'kecamatan',
        'kode_pos',
        'ekspedisi',
        'paket',
        'estimasi',
        'total_belanja',
        'berat',
        'ongkir',
        'total',
        'status',
        'no_resi',
        'catatan_admin',
        'tracking_no',
        'payment_status',
        'transaksi_id',
        'transaksi_time',
        'payment_type',
        'payment_code',
        'pdf_url',
        'bukti',
    ];

    public function orderitems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
