<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkripsisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skripsis', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('nama_mahasiswa');
            $table->string('nomor_mahasiswa');
            $table->string('kelas');
            $table->mediumText('judul');
            $table->longText('deskripsi');
            $table->tinyInteger('status')->default('0');
            $table->string('pembimbing')->nullable();
            $table->string('penguji')->nullable();
            $table->longText('catatan')->nullable();
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
        Schema::dropIfExists('skripsis');
    }
}
