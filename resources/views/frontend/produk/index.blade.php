@extends('layouts.front')
@section('title')
	{{ $kategori->name }}
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
                    <h2 class="text-capitalize font600 mb-10">Katalog</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center bg-transparent">
                        <li class="breadcrumb-item"><a class="primary-color" href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item"><a class="primary-color" href="{{ url('kategori') }}">Kategori</a></li>
                        <li class="breadcrumb-item active text-capitalize" aria-current="page">{{ $kategori->name }}</li>
                        </ol>
                    </nav>
                </div><!-- /page title -->
            </div><!-- /col -->
        </div>
    </div><!-- /single-slider -->
</div>


<div class="container">	
<div class="row row-cols-1 row-cols-md-6 g-4">
	@foreach ($produk as $prod)
  <div class="col">
    <div class="card mb-4">
      <img src="{{ asset('assets/uploads/products/'.$prod->image) }}" class="card-img-top" alt="{{ $prod->slug }}">
      <div class="card-body">
        <h5 class="card-title">{{ $prod->name }}</h5>
        <p class="card-text">
        	<span class="" style="color: black;">Rp. {{ number_format($prod->selling_price) }}</span><br>
			<span class="" style="color: maroon;"><s>Rp. {{ number_format($prod->original_price) }}</s></span>
			<a href="{{ url('kategori/'.$kategori->slug.'/'.$prod->slug) }}"><i class="fa-solid fa-eye fa-xl float-end"></i></a>
        </p>
      </div>
    </div>
  </div>
  @endforeach
</div>
</div>  

@endsection
