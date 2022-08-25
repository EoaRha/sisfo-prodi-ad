<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('phone');
            $table->string('alamat');
            $table->string('provinsi');
            $table->string('tipe');
            $table->string('kota');
            $table->string('kecamatan');
            $table->string('kode_pos');
            $table->string('ekspedisi');
            $table->string('paket');
            $table->string('estimasi');
            $table->string('total_belanja');
            $table->string('berat');
            $table->string('ongkir');
            $table->int('total');
            $table->tinyInteger('status', ['0','1','2','3'])->default('0');
            $table->string('no_resi')->nullable();
            $table->string('catatan_admin')->nullable();
            $table->string('tracking_no')->unique();
            $table->string('payment_status')->default('0');
            $table->string('transaksi_id')->nullable();
            $table->string('transaksi_time')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('payment_code')->nullable();
            $table->string('pdf_url')->nullable();
            $table->string('bukti')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
