<?php

namespace App\Exports;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class OrderExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Order::select('fname', 'lname', 'email', 'phone', 'alamat', 'provinsi', 'tipe', 'kota', 'kecamatan', 'kode_pos', 'ekspedisi', 'paket', 'estimasi', 'total_belanja', 'berat', 'ongkir', 'total', 'status', 'no_resi', 'catatan_admin', 'tracking_no', 'payment_status', 'transaksi_id', 'transaksi_time', 'payment_type', 'payment_code', 'pdf_url')->get();
    }

    public function headings():array
    {
    	return ["Nama Awal", "Nama Akhir", "E-Mail", "Kontak", "Alamat", "Provinsi", "Tipe", "Kota", "Kecamatan", "Kode Pos", "Ekspedisi Pengiriman", "Paket Pengiriman", "Estimasi Sampai", "Total Belanja", "Total Berat", "Ongkir", "Total Yang Dibayarkan", "Status Admin", "Nomor Resi", "Catatan Admin", "Order ID", "Status Pembayaran", "Transaksi ID", "Waktu Transaksi", "Jenis Pembayaran", "Kode Pembayaran", "Invoice	"];
    }
}
