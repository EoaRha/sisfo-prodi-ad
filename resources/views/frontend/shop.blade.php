@extends('layouts.front')
@section('title')
	SHOP
@endsection

@section('content')

<div class="slider-area over-hidden">
    <div class="page-height d-flex align-items-center justify-content-center position-relative" data-background="images/slider/page-bg.jpg">
        <div class="slider-shape position-absolute z-index1">
            <span class="slider-bg-round d-block"></span>
        </div>
        <div class="row align-items-center">
            <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                <div class="page-title b-l pt-100 text-center position-relative z-index1">
                    <h2 class="text-capitalize font600 mb-10">Semua Produk</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center bg-transparent">
                        <li class="breadcrumb-item"><a class="primary-color" href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active text-capitalize" aria-current="page">Produk</li>
                        </ol>
                    </nav>
                </div><!-- /page title -->
            </div><!-- /col -->
        </div>
    </div><!-- /single-slider -->
</div>

<div class="container">
    <div class="row g-6 align-items-center mb-3">
      <div class="col-auto">
        <form action="{{ url('shop') }}" method="GET">
            <input type="search" name="searchshop" id="inputPassword6" placeholder="Search..." class="border-0 pl-25 theme-color">
            <button type="submit" class="input-group-text float-end" style="background:white;">
                <span><i class="fa-solid fa-magnifying-glass"></i></i>
                </span>
            </button>
        </form>
      </div>

      <div class="col-auto">
          <a href="{{ url('shop') }}" class="web-btn d-inline-block text-uppercase primary-color gray-border2 position-relative over-hidden px-3 ptb-7">Refresh<span class="pl-1"><i class="fa-solid fa-globe"></i></span></a>
      </div>
    </div>	

    <div class="row row-cols-1 row-cols-md-4 g-4">
    	@foreach ($shop as $sope)
      <div class="col">
        <div class="card mb-4">
          <a href="{{ url('kategori/'.$sope->kategori->slug.'/'.$sope->slug) }}">
          <img src="{{ asset('assets/uploads/products/'.$sope->image) }}" class="card-img-top" alt="{{ $sope->slug }}">
          <div class="card-body">
            <h5 class="card-title">{{ $sope->name }}</h5>
            <p class="card-text">
            	<span class="gray-color pr-2"><del>Rp. {{ number_format($sope->original_price) }}</del></span>
                <br>
                <span class="primary-color">Rp. {{ number_format($sope->selling_price) }}</span>
    			
    			<i class="fa-solid fa-eye fa-xl float-end"></i></a>
            </p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
</div>  
		
@endsection