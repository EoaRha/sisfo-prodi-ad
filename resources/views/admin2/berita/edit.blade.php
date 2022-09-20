@extends('layouts.admin')

@section('title')
	Update Berita
@endsection

@section('content')
<div class="page-content">
	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">Forms</div>
		<div class="ps-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="{{ url('adm-berita') }}">Berita</a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">Update Berita</li>
				</ol>
			</nav>
		</div>
	</div>
</div>


<form action="{{ url('update-berita/'.$berita->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
	<div class="row">
		<div class="col-xl-9 mx-auto">
			<h6 class="mb-0 text-uppercase">Data Berita SI ITB AD</h6>
			<hr/>
			<div class="card">
				<div class="card-body">
					<div class="input-group mb-3"> <span class="input-group-text" id="inputGroup-sizing-default" style="font-weight: 600">Judul</span>
						<input type="text" name="judul" value="{{$berita->judul}}" placeholder="Masukan Judul Berita" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
					</div>

					<div class="input-group mb-3"> <span class="input-group-text" id="inputGroup-sizing-default" style="font-weight: 600">Slug</span>
						<input type="text" name="slug" value="{{$berita->slug}}" placeholder="Silahkan Copy Judul Berita & Paste Disini" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
					</div>

					<div class="input-group mb-3"> <span class="input-group-text" id="inputGroup-sizing-default" style="font-weight: 600">Penulis</span>
						<input type="text" name="penulis" value="{{$berita->penulis}}" placeholder="Masukan Penulis" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-body">
					<div class="input-group mb-3"> <span class="input-group-text" style="font-weight: 600">Deskripsi</span>
						<textarea class="form-control" id="deskripsi" name="deskripsi" aria-label="With textarea">{{$berita->deskripsi}}</textarea>
					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-body">
					<div class="input-group mb-3"> <span class="input-group-text" style="font-weight: 600">Meta_Title</span>
						<textarea class="form-control" name="meta_title" placeholder="Meta SEO Title" aria-label="With textarea">{{$berita->meta_title}}</textarea>
					</div>
				</div>

				<div class="card-body">
					<div class="input-group mb-3"> <span class="input-group-text" style="font-weight: 600">Meta_Deskripsi</span>
						<textarea class="form-control" name="meta_deskripsi" placeholder="Meta SEO Deskripsi" aria-label="With textarea">{{$berita->meta_deskripsi}}</textarea>
					</div>
				</div>

				<div class="card-body">
					<div class="input-group mb-3"> <span class="input-group-text" style="font-weight: 600">Meta_Keywords</span>
						<textarea class="form-control" name="meta_keywords" placeholder="Meta SEO Deskripsi" aria-label="With textarea">{{$berita->meta_keywords}}</textarea>
					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-body">
					<div class="col-md-6 mb-3 float-end">
						<label for="" style="font-weight: 600; font-size: 20px;">Status Berita</label>
						<input type="checkbox" name="status" {{ $berita->status == "1" ? 'checked':'' }}>
					</div>

					<div class="col-md-6 mb-3" style="font-weight: 600; font-size: 20px;">
						<label for="">Berita Trending</label>
						<input type="checkbox" name="trending" {{ $berita->trending == "1" ? 'checked':'' }}>
					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-body">
					@if($berita->image)
						<img src="{{ asset('uploads/berita/'.$berita->image) }}">
					@endif
					<div class="mb-3">
						<label for="formFile" class="form-label">Update Gambar Berita</label>
						<input class="form-control" type="file" id="formFile" name="image">
					</div>
				</div>
			</div>
			<hr>
			<button type="submit" class="update-btn">Update</button>
		</div>
	</div>
</form>
@endsection