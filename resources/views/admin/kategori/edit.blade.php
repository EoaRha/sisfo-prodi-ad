@extends('layouts.admin')
@section('content')

<div class="card">
	<div class="card-header">
		<h4>Edit/Update Kategori</h4>	
	</div>

	<div class="card-body">
		<form action="{{ url('update-kategori/'.$category->id) }}" method="POST" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row">
				<div class="col-md-6 mb-3">
					<label for="">Nama</label>
					<input type="text" value="{{ $category->name }}" class="form-control" name="name">
				</div>

				<div class="col-md-6 mb-3">
					<label for="">Slug</label>
					<input type="text" value="{{ $category->slug }}" class="form-control" name="slug">
				</div>

				<div class="col-md-12 mb-3">
					<label for="">Deskripsi</label>
					<textarea name="deskripsi" rows="5" class="form-control">{{ $category->deskripsi }}</textarea>
				</div>

				<div class="col-md-6 mb-3">
					<label for="">Status</label>
					<input type="checkbox"  name="status" {{ $category->status == "1" ? 'checked':'' }} >
				</div>

				<div class="col-md-6 mb-3">
					<label for="">Popular</label>
					<input type="checkbox" name="popular" {{ $category->popular == "1" ? 'checked':'' }} >
				</div>

				<div class="col-md-12 mb-3">
					<label for="">Meta_Title</label>
					<input type="text" value="{{ $category->meta_title }}" class="form-control" name="meta_title">
				</div>

				<div class="col-md-12 mb-3">
					<label for="">Meta_Deskripsi</label>
					<textarea name="meta_deskripsi" rows="5" class="form-control">{{ $category->meta_deskripsi }}</textarea>
				</div>

				<div class="col-md-12 mb-3">
					<label for="">Meta_Keywords</label>
					<textarea name="meta_keywords" rows="5" class="form-control">{{ $category->meta_keywords }}</textarea>
				</div>

				@if($category->image)
					<img src="{{ asset('assets/uploads/kategori/'.$category->image) }}" alt="Category Image">
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