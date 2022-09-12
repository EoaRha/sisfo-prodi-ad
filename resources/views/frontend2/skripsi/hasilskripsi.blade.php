@extends('layouts.front2')

@section('meta')
    <meta name="description" content="Sisem ini merupakan sistem yang dikelola lansung oleh Prodi SI ITB AD. Sebagai media informasi dan Kegiatan Progaram Studi Sistem Informasi ITB AD">
    <meta name="author" content="XRha">
    <meta name="keywords" content="ITB AD, SI, Sistem Informasi, KKL, Skripsi, Sisfo, Akademik, Prodi">
    <meta name="robots" content="index, follow">
@endsection

@section('title')
    Pengumuman Hasil Pengajuan Judul Skripsi
@endsection

@section('content2')

<section class="section m-t-50 m-b-50">
    <div class="container">
        <header class="entry-header">
            <h2 class="entry-title" style="font-size: 50px;">Daftar Yang Diterima Pengajuan Skripsi</h2>
        </header>
        <div class="entry-content m-t-20">
            <table id="example" class="display responsive table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama Mahasiswa</th>
                        <th>NIM</th>
                        <th>Kelas</th>
                        <th>Judul</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($skripsi as $item)
                    <tr>
                        <td><i class="fa fa-caret-down"></i> <span style="font-weight: 600;">{{ $item->nama_mahasiswa }}</span></td>
                        <td><span style="font-weight: 600;">{{ $item->nomor_mahasiswa }}</span></td>
                        <td><span style="font-weight: 600;">{{ $item->kelas }}</span></td>
                        <td><span style="color: rgb(100,100,100); font-weight: 600; font-size: 15px; font-style: italic;">"{{ $item->judul }}"</span></td>
                        @if($item->status == '1')
                        <td><span style="color: green; font-weight: 600; font-size: 15px;">"Diterima"</span></td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Nama Mahasiswa</th>
                        <th>NIM</th>
                        <th>Kelas</th>
                        <th>Judul</th>
                        <th>Status</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</section>

@endsection