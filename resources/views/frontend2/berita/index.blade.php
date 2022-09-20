@extends('layouts.front2')

@section('meta')
    <meta name="description" content="Sisem ini merupakan sistem yang dikelola lansung oleh Prodi SI ITB AD. Sebagai media informasi dan Kegiatan Progaram Studi Sistem Informasi ITB AD">
    <meta name="author" content="XRha">
    <meta name="keywords" content="ITB AD, SI, Sistem Informasi, KKL, Skripsi, Sisfo, Akademik, Prodi">
    <meta name="robots" content="index, follow">
@endsection

@section('title')
    Berita - Sistem Informasi Institut Teknologi Dan Binis Ahmad Dahlan
@endsection

@section('content2')

<!-- PAGE HEADING-->
<section class="section p-t-100 p-b-65">
    <div class="container">
        <div class="page-heading">
            <h4 class="title-sub title-sub--c8 m-b-15">Berita & Informasi</h4>
            <h2 class="title-2">Berita Terbaru</h2>
        </div>
        <div>
            <form action="{{ url('berita') }}" method="GET">
                <input type="search" id="inputPassword6" name="searchberita" placeholder="Cari Berita..." class="form-control" aria-describedby="passwordHelpInline">
            </form>
            <a href="{{ url('berita') }}" class="refresh-btn">SHOW ALL</a>
        </div>
    </div>
</section>
<!-- END PAGE HEADING-->

<!-- BLOG-->
<section class="section">
    <div class="container">
        <div class="row gutter-xl">
            @foreach($berita as $item)
            <div class="col-md-6">
                <article class="blog">
                    <figure class="entry-image">
                        <a href="{{ url('berita/'.$item->slug) }}">
                            <img src="{{ asset('uploads/berita/'.$item->image) }}" alt="{{ $item->judul }}" style="width: 100%; height: 300px;" />
                        </a>
                    </figure>
                    <div class="entry-summary">
                        <h4 class="entry-title">
                            <a href="{{ url('berita/'.$item->slug) }}" style="display: -webkit-box;
                        -webkit-line-clamp: 2;
                        -webkit-box-orient: vertical;
                        overflow: hidden;">{{$item->judul}}</a>
                        </h4>
                        <span class="entry-meta">{{ date('d-m-y', strtotime($item->updated_at)) }}</span>
                        <div class="des-berita" style="display: -webkit-box;
                        -webkit-line-clamp: 2;
                        -webkit-box-orient: vertical;
                        overflow: hidden;">
                        <p class="entry-excerpt">{!! $item->deskripsi !!}</p>
                        </div>
                    </div>
                </article>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- END BLOG-->

@endsection