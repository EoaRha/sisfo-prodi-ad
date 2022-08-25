@extends('layouts.front')
@section('title', $products->name)

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
                        <li class="breadcrumb-item"><a class="primary-color" href="{{ url('kategori/'.$products->kategori->slug) }}">{{ $products->kategori->name }}</a></li>
                        <li class="breadcrumb-item active text-capitalize" aria-current="page">{{ $products->name }}</li>
                        </ol>
                    </nav>
                </div><!-- /page title -->
            </div><!-- /col -->
        </div>
    </div><!-- /single-slider -->
</div>

<div class="container">
	<div class="card shadow product_data">
		<div class="card-body">
			<div class="row">
				<div class="col-md-4 border-right">
					<img src="{{ asset('assets/uploads/products/'.$products->image) }}" class="w-100" alt="">
				</div>

				<div class="col-md-8">
					<h2 class="mb-0">
						{{ $products->name }}
						@if($products->trending == '1')
						<label style="font-size: 16px;" class="float-end badge bg-danger trending_tag">Trending</label>
						@endif
					</h2>

					<hr>
					<label class="me-3" style="color: maroon;">Harga : <s>Rp. {{ number_format($products->original_price) }}</s></label>
					<label class="fw-bold">Diskon : Rp. {{ number_format($products->selling_price) }}</label>
					<p class="mt-3">Berat : {{ $products->weight }} .gram</p>
					<p class="mt-3">
						{!! $products->small_deskripsi !!}
					</p>
					
					<hr>
					@if($products->qty > 0)
						<label class="badge bg-success">Stock Ready</label>
					@else
						<label class="badge bg-danger">Stock Habis</label>
					@endif
					<div class="row mt-2">
						<div class="col-md-3">
							<input type="hidden" value="{{ $products->id }}" class="prod_id">
							<label for="Quantity">Quantity</label>
							<div class="input-group text-center mb-3" style="width: 130px;">
								<button class="input-group-text decrement-btn">-</button>
								<input type="text" name="quantity" value="1" class="form-control qty-input text-center">
								<button class="input-group-text increment-btn">+</button>
							</div>
						</div>

						<div class="col-md-9">
							<br/>
							@if($products->qty > 0)
								<button type="button" class="btn btn-primary me-3 addToCartBtn float-start">Tambahkan ke Keranjang<i class="fa fa-shopping-cart"></i> </button>
							@endif
								<button type="button" class="btn btn-success me-3 addToWishlist float-start">Tambahkan ke Disukai<i class="fa fa-heart"></i> </button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<hr>
				<h3>Deskripsi</h3>
				<p class="mt-3">
					{!! $products->deskripsi !!}
				</p>
			</div>
		</div>
	</div>
</div>
@endsection
