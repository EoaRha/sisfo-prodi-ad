@extends('layouts.admin')
@section('title')
	Order
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header bg-success">
					<h4 class="text-white">History
					<a href="{{ 'orders' }}" class="btn btn-warning btn-sm float-right">Orderan</a>
					</h4>
				</div>

				<div class="card-body">

					<div class="row g-3 align-items-center mb-3">
					  <div class="col-auto">
					  	<form action="{{ url('order-history') }}" method="GET">
					    	<input type="search" id="inputPassword6" name="searchhis" placeholder="Cari Kode..." class="form-control" aria-describedby="passwordHelpInline">
					  	</form>
					  </div>

					  <div class="col-auto">
					  	<a class="btn" href="{{ url('order-history') }}" style="border-radius: 30%; background-color: #0000007a;"><i class="fa fa-rotate-left"></i></a>
					  </div>
					</div>

					<table class="table table-bordered">
						<thead>
							<tr style="text-align:center;">
								<th>Tanggal Order</th>
								<th>Kode</th>
								<th>Nama</th>
								<th>Total Harga</th>
								<th>Status</th>
								<th>Aksi</th>
							</tr>
						</thead>
						
						<tbody>
							@foreach ($orders as $item)
							<tr style="text-align: center;">
								<td>{{ date('d-m-y / H:i:s', strtotime($item->created_at)) }}</td>
								<td>{{ $item->tracking_no }}</td>
								<td>{{ $item->fname }} {{ $item->lname }}</td>
								<td>Rp. {{ number_format($item->total) }}</td>
								@if( $item->status == '1')
								<td>Selesai</td>
								@endif
								<td>
									<a href="{{ url('admin/view-history/'.$item->id) }}" class="btn btn-success">Lihat</a>
								</td>
							</tr>
							@endforeach	
						</tbody>
					</table>
					<nav aria-label="Page navigation example">
					  <ul class="pagination justify-content-center">
					    <li>{{ $orderpag->links() }}</li>
					  </ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection