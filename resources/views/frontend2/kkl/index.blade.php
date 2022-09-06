@extends('layouts.front2')

@section('meta')
    <meta name="description" content="Sisem ini merupakan sistem yang dikelola lansung oleh Prodi SI ITB AD. Sebagai media informasi dan Kegiatan Progaram Studi Sistem Informasi ITB AD">
    <meta name="author" content="XRha">
    <meta name="keywords" content="ITB AD, SI, Sistem Informasi, KKL, Skripsi, Sisfo, Akademik, Prodi">
    <meta name="robots" content="index, follow">
@endsection

@section('title')
    Pengajual Judul KKL
@endsection

@section('content2')

<section class="section checkout">
    <div class="container">
        <header class="entry-header">
            <h2 class="entry-title">Pengajuan Judul KKL</h2>
        </header>
        <div class="entry-content">
            <form action="{{ url('pengajuan-kkl') }}" method="POST">
            	{{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-6">
                        <div class="woocommerce-billing-fields">
                            <h3 class="title-7 m-b-15">Detail Mahasiswa</h3>
                            <div class="form-group" style="font-size: 15px">
                                <label class="form-label">Nama Mahasiswa</label>
                                <input class="au-input-2 @error('nama_mahasiswa') is-invalid @enderror" value="{{ Auth::user()->nama_mahasiswa }}" name="nama_mahasiswa" required type="text" placeholder="Masukan Nama Mahasiswa">
                            </div>
                            <div class="form-group" style="font-size: 15px">
                                <label class="form-label">Nomor Induk Mahasiswa</label>
                                <input class="au-input-2 @error('nomor_mahasiswa') is-invalid @enderror" value="{{ Auth::user()->nomor_mahasiswa }}" name="nomor_mahasiswa" required type="text" placeholder="Masukan Nomor Induk Mahasiswa">
                            </div>
                            <div class="form-group" style="font-size: 15px">
                                <label class="form-label">Kelas</label>
                                <input class="au-input-2 @error('kelas') is-invalid @enderror" value="{{ Auth::user()->kelas }}" name="kelas" required type="text" placeholder="Kelas Pengajuan KKL" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="woocommerce-additional-fields">
                            <h3 class="title-7 m-b-15">Detail Pengajuan KKL</h3>
                            <div class="form-group" style="font-size: 15px">
                                <label class="form-label">Judul</label>
                                <input class="au-input-2" name="judul" required type="text" placeholder="Masukan judul yang diangkat" required>
                            </div>
                            <div class="form-group" style="font-size: 15px">
                                <label class="au-label-2">Deskripsi</label>
                                <textarea class="au-textarea-2" name="deskripsi" required name="order-note" placeholder="Jelaskan latar belakang tentang judul yang diangkat..."></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" style="margin-left: 16px;" class="au-btn au-btn--solid au-btn-lg">Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection