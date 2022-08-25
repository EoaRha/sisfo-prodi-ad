@extends('layouts.admin')
@section('content')

<div class="container">
	<form action="{{ url('import-produk') }}" method="POST" enctype="multipart/form-data">
		@csrf
		<input type="file" name="imkate" class="form-control">
		<button class="btn btn-info" class="form-control" style="font-weight: bold;">Import</button>
	</form>
</div>
<div class="card">
	<div class="card-header bg-success">
		<h4 class="text-white">Halaman Produk</h4>
		<a href="{{ url('export-produk') }}" style="background-color: #4fa800; font-weight: bold;" class="btn float-end">Export</a>
		</h4>
	</div>

	<div class="card-body">
		<div class="row g-3 align-items-center mb-3">
		  <div class="col-auto">
		  	<form action="{{ url('products') }}" method="GET">
		    	<input type="search" id="inputPassword6" name="searchprod" placeholder="Cari Produk..." class="form-control" aria-describedby="passwordHelpInline">
		  	</form>
		  </div>

		  <div class="col-auto">
		  	<a class="btn" href="{{ url('products') }}" style="border-radius: 30%; background-color: #0000007a;"><i class="fa fa-rotate-left"></i></a>
		  </div>
		</div>

		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Id</th>
					<th>Kategori</th>
					<th>Name</th>
					<th>Selling Price</th>
					<th>Quantity</th>
					<th>Weight</th>
					<th>Image</th>
					<th>Action</th>
				</tr>
			</thead>

			<tbody>
				@foreach($products as $item)
				<tr>
					<td>{{ $item->id }}</td>
					<td>{{ $item->kategori->name }}</td>
					<td>{{ $item->name }}</td>
					<td>{{ $item->selling_price }}</td>
					<td>{{ $item->qty }}</td>
					<td>{{ $item->weight }}</td>
					<td>
						<img src="{{ asset('assets/uploads/products/'.$item->image)}}" class="kate-image" alt="">
					</td>
					<td>
						<a href="{{ url('edit-product/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
						<a href="{{ url('delete-product/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<nav aria-label="Page navigation example">
		  <ul class="pagination justify-content-center">
		    <li>{{ $products->links() }}</li>
		  </ul>
		</nav>		
	</div>
	
</div>

@endsection