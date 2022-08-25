@extends('layouts.front')
@section('title')
	Order Saya
@endsection

@section('content')



<div class="slider-area over-hidden">
    <div class="page-height d-flex align-items-center justify-content-center position-relative" data-background="images/slider/page-bg.jpg">
        <div class="slider-shape position-absolute z-index1">
            <span class="slider-bg-round d-block"></span>
        </div>
        <div class="row align-items-center">
            <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                <div class="page-title b-l pt-100 text-center position-relative z-index1">
                    <h2 class="text-capitalize font600 mb-10">History Pembayaran</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center bg-transparent">
                        <li class="breadcrumb-item"><a class="primary-color" href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active text-capitalize" aria-current="page">History</li>
                        </ol>
                    </nav>
                </div><!-- /page title -->
            </div><!-- /col -->
        </div>
    </div><!-- /single-slider -->
</div>

<div class="container py-5">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header bg-success">
					<h4 class="text-white">History Saya
						<a href="{{ 'my-orders' }}" class="btn btn-warning btn-sm float-end">Order</a>
					</h4>
				</div>

				<div class="card-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Tanggal Order</th>
								<th>Kode</th>
								<th>Total Harga</th>
								<th>Status</th>
								<th>Aksi</th>
							</tr>
						</thead>
						
						<tbody>
							@foreach ($orders as $item)
							<tr style="text-align: center;">
								<td>{{ date('d-m-y H:i:s', strtotime($item->created_at)) }}</td>
								<td>{{ $item->tracking_no }}</td>
								<td>Rp. {{ number_format($item->total) }}</td>

								@if($item->payment_status == 'settlement' or $item->payment_status == 'capture')
								<td>
								<span style="background-color: green; border-radius: 10px; margin: 10px; font-weight: bold; color: black; padding: 5px;">Selesai</span>
								</td>
								@endif

								<td>
									<a href="{{ url('history-trans/'.$item->id) }}" class="btn btn-primary" style="background-color: rgba(11, 58, 153, 0.8);">Lihat</a>
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