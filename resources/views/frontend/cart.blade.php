@extends('layouts.front')
@section('title')
	Keranjang Belanja
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
                    <h2 class="text-capitalize font600 mb-10">Keranjang Belanja</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center bg-transparent">
                        <li class="breadcrumb-item"><a class="primary-color" href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active text-capitalize" aria-current="page">Keranjang</li>
                        </ol>
                    </nav>
                </div><!-- /page title -->
            </div><!-- /col -->
        </div>
    </div><!-- /single-slider -->
</div>

<div class="container my-5">
	<div class="card shadow cartitems">
		@if($cartitems->count() > 0)
		<div class="card-body">
			@php $total = 0; @endphp
			@foreach($cartitems as $item)
			<div class="row product_data">
				<div class="col-md-2 my-auto">
					<img src="{{ asset('assets/uploads/products/'.$item->products->image) }}" height="70px" width="70px" alt="Image Here">
				</div>

				<div class="col-md-5 my-auto">
					<h6>{{ $item->products->name }}</h6>
				</div>

				<div class="col-md-2 my-auto">
					<h6>Rp. {{ number_format($item->products->selling_price) }}</h6>
				</div>
				
				<div class="col-md-1 my-auto">
					<h6>{{ $item->products->weight }} .grm</h6>
				</div>

				<div class="col-md-2 my-auto">
					<input type="hidden" class="prod_id" value="{{ $item->prod_id }}">
					@if($item->products->qty >= $item->prod_qty)
					<div class="input-group text-center mb-3" style="width: 130px;">
						<button class="input-group-text changeQuantity decrement-btn">-</button>
						<input type="text" name="quantity" class="form-control qty-input text-center" value="{{ $item->prod_qty }}">
						<button class="input-group-text changeQuantity increment-btn">+</button>
					</div>
					@php $total += $item->products->selling_price * $item->prod_qty ; @endphp
					@else
						<h6>Stok Habis</h6>
					@endif
				</div>

				<div class="col-md-2 my-auto">
					<button class="btn btn-danger delete-cart-item"> <i class="fa fa-trash"></i> Remove</button>
				</div>
			</div>
			@endforeach
		</div>

		<div class="card-footer">
			<h6 style="color: black; font-weight: bold;">Total Harga : Rp. {{ number_format($total) }} 
				<a href="{{ url('checkout') }}" class="btn btn-outline-success float-end">Check Out</a>
			</h6>
		</div>
		@else
		<div class="card-body text-center">
			<h2>Keranjang <i class="fa fa-shopping-cart"></i>Keranjang Belanja Anda Kosong</h2>
			<a href="{{ url('shop') }}" class="btn btn-outline-primary float-end">Lanjutkan Belanja</a>
		</div>
		@endif
	</div>
</div>
@endsection