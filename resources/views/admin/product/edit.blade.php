@extends('layouts.admin')
@section('content')

<div class="card">
	<div class="card-header">
		<h4>Edit/Update Produk</h4>	
	</div>

	<div class="card-body">
		<form action="{{ url('update-product/'.$products->id) }}" method="POST" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row">
				<div class="col-md-12 mb-3">
					<select class="form-selectkat">
						<option>{{ $products->kategori->name }}</option>
					</select>
				</div>

				<div class="col-md-6 mb-3">
					<label for="">Nama</label>
					<input type="text" class="form-control" value="{{ $products->name }}" name="name">
				</div>

				<div class="col-md-6 mb-3">
					<label for="">Slug</label>
					<input type="text" class="form-control" value="{{ $products->slug }}" name="slug">
				</div>

				<div class="col-md-12 mb-3">
					<label for="">Small Deskripsi</label>
					<textarea name="small_deskripsi" rows="5" class="form-control">{{ $products->small_deskripsi }}</textarea>
				</div>

				<div class="col-md-12 mb-3">
					<label for="">Deskripsi</label>
					<textarea name="deskripsi" rows="5" class="form-control">{{ $products->deskripsi }}</textarea>
				</div>

				<div class="col-md-6 mb-3">
					<label for="">Original Price</label>
					<input type="number" value="{{ $products->original_price }}" class="form-control" name="original_price">
				</div>

				<div class="col-md-6 mb-3">
					<label for="">Selling Price</label>
					<input type="number" value="{{ $products->selling_price }}" class="form-control" name="selling_price">
				</div>

				<div class="col-md-6 mb-3">
					<label for="">Weight</label>
					<input type="number" value="{{ $products->weight }}" class="form-control" name="weight">
				</div>

				<div class="col-md-6 mb-3">
					<label for="">Quantity</label>
					<input type="number" value="{{ $products->qty }}" class="form-control" name="qty">
				</div>

				<div class="col-md-6 mb-3">
					<label for="">Status</label>
					<input type="checkbox" name="status" {{ $products->status == "1" ? 'checked' : '' }}>
				</div>

				<div class="col-md-6 mb-3">
					<label for="">Trending</label>
					<input type="checkbox" name="trending" {{ $products->trending == "1" ? 'checked' : '' }}>
				</div>

				<div class="col-md-12 mb-3">
					<label for="">Meta_Title</label>
					<input type="text" value="{{ $products->meta_title }}" class="form-control" name="meta_title">
				</div>

				<div class="col-md-12 mb-3">
					<label for="">Meta_Keywords</label>
					<textarea name="meta_keywords" rows="5" class="form-control">{{ $products->meta_keywords }}</textarea>
				</div>

				<div class="col-md-12 mb-3">
					<label for="">Meta_Deskripsi</label>
					<textarea name="meta_deskripsi" rows="5" class="form-control">{{ $products->meta_deskripsi }}</textarea>
				</div>
				@if($products->image)
					<img src="{{ asset('assets/uploads/products/'.$products->image) }}" alt="">
				@endif
				<div class="col-md-12">
					<input type="file" name="image" class="form-control">
				</div>

				<div class="col-md-12">
					<button type="submit" class="btn btn-primary">Update</button>
				</div>
			</div>
		</form>
	</div>
	
</div>

@endsection