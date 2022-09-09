@extends('layouts.front2')

@section('meta')
    <meta name="description" content="Sisem ini merupakan sistem yang dikelola lansung oleh Prodi SI ITB AD. Sebagai media informasi dan Kegiatan Progaram Studi Sistem Informasi ITB AD">
    <meta name="author" content="XRha">
    <meta name="keywords" content="ITB AD, SI, Sistem Informasi, KKL, Skripsi, Sisfo, Akademik, Prodi">
    <meta name="robots" content="index, follow">
@endsection

@section('title')
    History Pengajual Judul KKL
@endsection

@section('content2')
<section class="section m-t-50 m-b-50">
    <div class="container">
        <header class="entry-header">
            <h2 class="entry-title" style="font-size: 50px;">History Pengajuan KKL Saya</h2>
        </header>
        <div class="entry-content m-t-20">
            <table id="example" class="display responsive table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Status</th>
                        <th>Catatan</th>
                        <th>Penguji</th>
                        <th>Pembimbing</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kkl as $item)
                    <tr>
                        <td><span style="color: rgb(100,100,100); font-weight: 600; font-size: 15px; font-style: italic;">"{{ $item->judul }}"</span></td>
                        @if($item->status == '0')
						<td><span style="text-align: center; font-size: 13px; color: #fcba03; font-weight: 600;">"Pending"</span></td>
						@elseif($item->status == '1')
						<td><span style="text-align: center; font-size: 13px; color: #06c706;font-weight: 600;">"Diterima"</span></td>
						@elseif($item->status == '2')
						<td><span style="text-align: center; font-size: 13px; color: #c70c06; font-weight: 600;">"Ditolak"</span></td>
						@endif
                        <td>{{ $item->catatan }}</td>
                        <td>{{ $item->penguji }}</td>
                        <td>{{ $item->pembimbing }}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Judul</th>
                        <th>Status</th>
                        <th>Catatan</th>
                        <th>Penguji</th>
                        <th>Pembimbing</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</section>
@endsection