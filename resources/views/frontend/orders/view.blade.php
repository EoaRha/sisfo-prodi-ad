@extends('layouts.front')
@section('title')
	Order Saya
@endsection

@section('content')
<div class="container py-5 mt-5">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header bg-primary">
					<h4 class="text-white">Lihat Order
						<a href="{{ url('my-orders') }}" class="btn btn-warning float-end">Kembali</a>
					</h4>
				</div>

				<div class="card-body">
					<div class="row">
						<div class="col-md-6 order-details">
							<h4>Detail Pengirim
								<span class="float-end" style="font-size: 13px; font-weight: bold;"><u>{{ date('d-m-y H:i:s', strtotime($orders->created_at)) }}</u></span>
							</h4>
							<hr>

							<h5 for="" style="font-weight:bold">No. Transaksi</h5>
							<div class="form-control mb-2">{{ $orders->tracking_no }}</div>

							<h5 for="" style="font-weight:bold">Nama </h5>
							<div class="form-control mb-2">{{ $orders->fname }} {{ $orders->lname }}</div>

							<h5 for="" style="font-weight:bold">E-Mail </h5>
							<div class="form-control mb-2">{{ $orders->email }}</div>

							<h5 for="" style="font-weight:bold">Kontak </h5>
							<div class="form-control mb-2">{{ $orders->phone }}</div>

							<h5 for="" style="font-weight:bold">Alamat Pengiriman </h5>
							<div class="form-control mb-3">
								{{ $orders->alamat }}, <br>
								{{ $orders->kecamatan }},<br>
								{{ $orders->provinsi }},
								{{ $orders->kota }},
								{{ $orders->kode_pos }}
							</div>
						</div>

						<div class="col-md-6">
							<h4>Detail Order</h4>
							<hr>
							<h5 style="font-weight:bold">Status Pembayaran -><label style="color: green;"> {{ $orders->payment_status }}</label></h5>
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>Nama</th>
										<th>Quantity</th>
										<th>Harga</th>
										<th>Image</th>
									</tr>
								</thead>
								
								<tbody>
									@foreach ($orders->orderitems as $item)
									<tr>
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
							<hr>
							<h6><label style="font-weight:bold;">Total Belanja :</label> Rp. {{ number_format($orders->total_belanja) }}</h6><br>
							<h6><label style="font-weight:bold;">Ongos Kirim :</label> Rp. {{ number_format($orders->ongkir) }}</h6>
							<hr>
							<h5><label style="font-weight:bold; margin-bottom: 3%;">Total Bayar :</label> Rp. {{ number_format($orders->total) }}</h5>

						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>
</div>
@endsection