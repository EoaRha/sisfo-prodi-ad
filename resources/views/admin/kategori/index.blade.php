@extends('layouts.admin')
@section('content')

<div class="container">
	<form action="{{ url('import-kategori') }}" method="POST" enctype="multipart/form-data">
		@csrf
		<input type="file" name="improd" class="form-control">
		<button class="btn btn-info" class="form-control" style="font-weight: bold;">Import</button>
	</form>
</div>
<div class="card">
	<div class="card-header bg-success">
		<h4 class="text-white">Halaman Kategori
		<a href="{{ url('export-kategori')}}" style="background-color: #4fa800; font-weight: bold;" class="btn float-end">Export</a>
		</h4>
	</div>

	<div class="card-body">
		<div class="row g-3 align-items-center mb-3">
		  <div class="col-auto">
		  	<form action="{{ url('Kategori') }}" method="GET">
		    	<input type="search" id="inputPassword6" name="searchkat" placeholder="Cari Kategori..." class="form-control" aria-describedby="passwordHelpInline">
		  	</form>
		  </div>

		  <div class="col-auto">
		  	<a class="btn" href="{{ url('Kategori') }}" style="border-radius: 30%; background-color: #0000007a;"><i class="fa fa-rotate-left"></i></a>
		  </div>
		</div>

		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Deskripsi</th>
					<th>Image</th>
					<th>Action</th>
				</tr>
			</thead>

			<tbody>
				@foreach($category as $item)
				<tr>
					<td>{{ $item->id }}</td>
					<td>{{ $item->name }}</td>
					<td>{{ $item->deskripsi }}</td>
					<td>
						<img src="{{ asset('assets/uploads/kategori/'.$item->image)}}" class="kate-image" alt="">
					</td>
					<td>
						<a href="{{ url('edit-kategori/'.$item->id) }}" class="btn btn-primary">Edit</a>
						<a href="{{ url('delete-kategori/'.$item->id) }}" class="btn btn-danger">Delete</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<nav aria-label="Page navigation example">
		  <ul class="pagination justify-content-center">
		    <li>{{ $category->links() }}</li>
		  </ul>
		</nav>	
	</div>
	
</div>

@endsection