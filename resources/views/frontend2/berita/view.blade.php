@extends('layouts.front2')

@section('meta')
    <meta name="description" content="{{ $berita->meta_deskripsi }}">
    <meta name="author" content="XRha">
    <meta name="keywords" content="{{ $berita->meta_keywords }}">
    <meta name="robots" content="index, follow">
@endsection

@section('title')
    {{ $berita->meta_title }} - Sistem Informasi ITB AD
@endsection

@section('content2')



@endsection