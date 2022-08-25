@extends('layouts.admin')
@section('content')

<div class="card">
	<div class="card-header">
		<h4>Add Produk</h4>	
	</div>

	<div class="card-body">
		<form action="{{ url('insert-product') }}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<div class="col-md-12 mb-3">
					<select class="form-selectkat" name="kate_id">
						<option>Pilih Kategori</option>
						@foreach($category as $item)
							<option value="{{ $item->id }}">{{ $item->name }}</option>
						@endforeach
					</select>
				</div>

				<div class="col-md-6 mb-3">
					<label for="">Nama</label>
					<input type="text" class="form-control" name="name">
				</div>

				<div class="col-md-6 mb-3">
					<label for="">Slug</label>
					<input type="text" class="form-control" name="slug">
				</div>

				<div class="col-md-12 mb-3">
					<label for="">Small Deskripsi</label>
					<textarea name="small_deskripsi" rows="5" class="form-control"></textarea>
				</div>

				<div class="col-md-12 mb-3">
					<label for="">Deskripsi</label>
					<textarea name="deskripsi" rows="5" class="form-control"></textarea>
				</div>

				<div class="col-md-6 mb-3">
					<label for="">Original Price</label>
					<input type="number" class="form-control" name="original_price">
				</div>

				<div class="col-md-6 mb-3">
					<label for="">Selling Price</label>
					<input type="number" class="form-control" name="selling_price">
				</div>

				<div class="col-md-6 mb-3">
					<label for="">Weight</label>
					<input type="number" class="form-control" name="weight">
				</div>

				<div class="col-md-6 mb-3">
					<label for="">Quantity</label>
					<input type="number" class="form-control" name="qty">
				</div>

				<div class="col-md-6 mb-3">
					<label for="">Status</label>
					<input type="checkbox" name="status">
				</div>

				<div class="col-md-6 mb-3">
					<label for="">Trending</label>
					<input type="checkbox" name="trending">
				</div>

				<div class="col-md-12 mb-3">
					<label for="">Meta_Title</label>
					<input type="text" class="form-control" name="meta_title">
				</div>

				<div class="col-md-12 mb-3">
					<label for="">Meta_Keywords</label>
					<textarea name="meta_keywords" rows="5" class="form-control"></textarea>
				</div>

				<div class="col-md-12 mb-3">
					<label for="">Meta_Deskripsi</label>
					<textarea name="meta_deskripsi" rows="5" class="form-control"></textarea>
				</div>

				<div class="col-md-12">
					<input type="file" name="image" class="form-control">
				</div>

				<div class="col-md-12">
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</div>
		</form>
	</div>
	
</div>

@endsection