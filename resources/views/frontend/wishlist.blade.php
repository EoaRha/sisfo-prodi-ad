@extends('layouts.front')
@section('title')
	Wishlist
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
                    <h2 class="text-capitalize font600 mb-10">Barang Yang Disukai</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center bg-transparent">
                        <li class="breadcrumb-item"><a class="primary-color" href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active text-capitalize" aria-current="page">Disukai</li>
                        </ol>
                    </nav>
                </div><!-- /page title -->
            </div><!-- /col -->
        </div>
    </div><!-- /single-slider -->
</div>

<div class="container my-5">
	<div class="card shadow wishlistitems">
		<div class="card-body">	
			@if($wishlist->count() > 0)
				@foreach($wishlist as $item)
				<div class="row product_data">
					<div class="col-md-2 my-auto">
						<img src="{{ asset('assets/uploads/products/'.$item->products->image) }}" height="70px" width="70px" alt="Image Here">
					</div>

					<div class="col-md-2 my-auto">
						<h6>{{ $item->products->name }}</h6>
					</div>

					<div class="col-md-2 my-auto">
						<h6>Rp. {{ $item->products->selling_price }}</h6>
					</div>

					<div class="col-md-2 my-auto">
						<input type="hidden" class="prod_id" value="{{ $item->prod_id }}">
						@if($item->products->qty >= $item->prod_qty)
							<label for="Quantity">Quantity</label>
							<div class="input-group text-center mb-3" style="width: 130px;">
								<button class="input-group-text decrement-btn">-</button>
								<input type="text" name="quantity" class="form-control qty-input text-center" value="1">
								<button class="input-group-text increment-btn">+</button>
							</div>
						@else
							<h6>Stok Habis</h6>
						@endif
					</div>

					<div class="col-md-2 my-auto">
						<button class="btn btn-success addToCartBtn"> <i class="fa fa-shopping-cart"></i> Tambahkan</button>
					</div>

					<div class="col-md-2 my-auto">
						<button class="btn btn-danger remove-wishlist-item"> <i class="fa fa-trash"></i> Hapus</button>
					</div>
				</div>
				@endforeach

			@else
				<h4>Tidak Ada Produk Disukai</h4>
			@endif
		</div>
	</div>
</div>
@endsection