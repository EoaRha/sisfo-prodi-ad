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
					<h4 class="text-white">Order Terbaru
					<a href="{{ 'order-history' }}" class="btn btn-warning btn-sm float-right">History</a>
					</h4>
				</div>

				<div class="card-body">
					<div class="row g-3 align-items-center mb-3">
					  <div class="col-auto">
					  	<form action="{{ url('orders') }}" method="GET">
					    	<input type="search" id="inputPassword6" name="searchord" placeholder="Cari Kode..." class="form-control" aria-describedby="passwordHelpInline">
					  	</form>
					  </div>

					  <div class="col-auto">
					  	<a class="btn" href="{{ url('orders') }}" style="border-radius: 30%; background-color: #0000007a;"><i class="fa fa-rotate-left"></i></a>

					  	<a href="{{ url('export-order') }}" style="background-color: #4fa800; font-weight: bold; margin-left: 15px;" class="btn float-end">Export</a>
					  </div>

					</div>


					<table class="table table-bordered">
						<thead>
							<tr style="text-align:center;">
								<th>Tanggal Order</th>
								<th>Kode</th>
								<th>Nama</th>
								<th>Total Harga</th>
								<th>Status Bayar</th>
								<th>Aksi</th>
							</tr>
						</thead>
						
						<tbody>
							@foreach ($orders as $item)
							<tr style="text-align:center;">
								<td>{{ date('d-m-y / H:i:s', strtotime($item->created_at)) }}</td>
								<td>{{ $item->tracking_no }}</td>
								<td>{{ $item->fname }} {{ $item->lname }}</td>
								<td>Rp. {{ number_format($item->total) }}</td>
								
								@if($item->payment_status == '0')
								<td><span style="background-color: red; border-radius: 10px; margin: 10px; font-weight: bold; color: black; padding: 5px;">Belum Bayar</span></td>

								@elseif($item->payment_status == 'settlement' or $item->payment_status == 'capture')
								<td>
									<span style="background-color: green; border-radius: 10px; margin: 10px; font-weight: bold; color: black; padding: 5px;">Selesai</span>
								</td>
								@else
								<td>
									<span style="background-color: yellow; border-radius: 10px; margin: 10px; font-weight: bold; color: black; padding: 5px;">Pending</span>
								</td>
								@endif
								@if($item->status == '0')
								<td>
									<a href="{{ url('admin/view-order/'.$item->id) }}" class="btn btn-success">Lihat</a>
								</td>
								@else
								<td>
								 {{ $item->no_resi }}
								</td>
								@endif
							</tr>
							@endforeach	
						</tbody>
					</table>
					<nav aria-label="Page navigation example">
					  <ul class="pagination justify-content-center">
					    <li>{{ $orders->links() }}</li>
					  </ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection