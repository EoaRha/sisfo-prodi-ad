@extends('layouts.admin')
@section('title')
	Order
@endsection

@section('content')
<div class="container py-5">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header bg-success">
					<h4 class="text-white">Lihat Order 
						<a href="{{ url('orders') }}" class="btn btn-warning btn-sm float-right">Kembali</a>
					</h4>
				</div>

				<div class="card-body">
					<div class="row">
						<div class="col-md-6 order-details">
							<h4>Detail Pengiriman</h4>
							<hr>
							<h6 class="float-end" style="font-style:italic;">{{ $orders->created_at }}</h6><br>
							<h5 style="font-weight:bold;">Nama</h5>
							<div class="form-control mb-3">{{ $orders->fname }} {{ $orders->lname }}</div>

							<h5 style="font-weight:bold;">E-Mail</h5>
							<div class="form-control mb-3">{{ $orders->email }}</div>

							<h5 style="font-weight:bold;">Nomor Handphone</h5>
							<div class="form-control mb-3">{{ $orders->phone }}</div>

							<h5 style="font-weight:bold;">Alamat Pengiriman</h5>
							<div class="form-control mb-3">
								{{ $orders->alamat }}, {{ $orders->kecamatan }} <br>
								{{ $orders->tipe }} {{ $orders->kota }}, {{ $orders->provinsi }}<br>
								{{ $orders->kode_pos }}
							</div>

							<h5 style="font-weight:bold;">Ekspedisi</h5>
							<div class="form-control mb-3">{{ $orders->ekspedisi }}</div>

							<h5 style="font-weight:bold;">Layanan Paket</h5>
							<div class="form-control mb-3">{{ $orders->paket }}</div>
						</div>

						<div class="col-md-6">
							<h4>Detail Order</h4>
							<hr>
							<table class="table table-bordered">
								<thead>
									<tr style="text-align:center;">
										<th>Nama</th>
										<th>Quantity</th>
										<th>Harga</th>
										<th>Image</th>
									</tr>
								</thead>
								
								<tbody>
									@foreach ($orders->orderitems as $item)
									<tr style="text-align:center;">
										<td>{{ $item->products->name }}</td>
										<td>{{ $item->qty }}</td>
										<td>{{ $item->harga }}</td>
										<td>
											<img src="{{ asset('assets/uploads/products/'.$item->products->image) }}" width="50px" height="50px" alt="Produk Image">
										</td>
									</tr>
									@endforeach	
								</tbody>
							</table>
							<h5 class="px-2">Total Belanja : <span class="float-end">Rp. {{ number_format($orders->total_belanja) }}</span></h5>

							<h5 class="px-2">Total Berat : <span class="float-end">{{ number_format($orders->berat) }} grm</span></h5>

							<h5 class="px-2">Ongkos Kirim : <span class="float-end">Rp. {{ number_format($orders->ongkir) }}</span></h5>

							<h5 class="px-2">Total Bayar : <span class="float-end">Rp. {{ number_format($orders->total) }}</span></h5>

							<hr>
							<div class="mt-3 px-2">
								@if($orders->payment_status == 'settlement' or $orders->payment_status == 'capture')
								<form action="{{ url('update-order/'.$orders->id) }}" method="POST">
									@csrf
									@method('PUT')

									<h4 style="font-weight:bold;">Nomor Resi</h4>
									<input class="form-control mb-3" type="text" name="no_resi" placeholder="Masukan Nomor Resi Pengiriman Disini..." required>

									<h4 style="font-weight:bold;">Catatan</h4>
									<textarea class="form-control mb-3" type="text" name="catatan_admin" placeholder="Tambahkan Catatan Disini..." required></textarea> 

									<h4 style="font-weight:bold;">Status Order</h4>
									<select class="form-select" name="order_status">
									  <option {{ $orders->status == '0'? 'selected':'' }} value="0">Pending</option>
									  <option {{ $orders->status == '1'? 'selected':'' }} value="1">Selesai</option>
									</select>
									
									<button type="submit" class="btn btn-success float-right mt-3">Update</button>
									
								</form>
								@else()

									@endif
							</div>

						</div>
					</div>
					<hr>	
				</div>
			</div>
		</div>
	</div>
</div>
@endsection