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
						<a href="{{ url('order-history') }}" class="btn btn-warning btn-sm float-right">Kembali</a>
					</h4>
				</div>

				<div class="card-body">
					<div class="row">
						<div class="col-md-6 order-details">
							<h4>Detail Pengiriman</h4>
							<hr>
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
									@if($orders->status == '1')
									<h5 style="font-weight:bold;">Status : <span style="color: green;">Selesai</span></h5>
									@endif
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

						</div>

						<div class="col-md-12">
							<hr>
							<h3 class="mb-3" style="text-align: center; font-weight: bold;">Detail Transaksi</h3>
							<h5 style="font-weight:bold;">Order Id</h5>
							<div class="form-control mb-2">{{ $orders->tracking_no }}</div>

							<h5 style="font-weight:bold;">Nomor Resi Pengiriman</h5>
							<div class="form-control mb-2">{{ $orders->no_resi }}</div>

							<h5 style="font-weight:bold;">Status Pembayaran</h5>
							<div class="form-control mb-2">{{ $orders->payment_status }}</div>

							<h5 style="font-weight:bold;">Transaksi Id</h5>
							<div class="form-control mb-2">{{ $orders->transaksi_id }}</div>

							<h5 style="font-weight:bold;">Waktu Transaksi</h5>
							<div class="form-control mb-2">{{ $orders->transaksi_time }}</div>

							<h5 style="font-weight:bold;">Tipe Pembayaran</h5>
							<div class="form-control mb-2">{{ $orders->payment_type }}</div>

							<h5 style="font-weight:bold;">Kode Pembayaran</h5>
							@if(!empty($orders->payment_code))
							<div class="form-control mb-2">{{ $orders->payment_code }}</div>
							@else()
							<div class="form-control mb-2">Tidak Ada Kode Pembayaran</div>
							@endif

							@if(!empty($order->bukti))
							<img style="display: block; margin-left: auto; margin-right: auto;" src="{{ asset('assets/uploads/bukti/'.$orders->bukti)}}" class="bukti-image" alt="">
							@else()
							<h5 style="font-weight:bold;">Bukti Bayar</h5>
							<div class="form-control mb-2"><u>::User Belum Upload Bukti Bayar::</u></div>
							@endif
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>
</div>
@endsection