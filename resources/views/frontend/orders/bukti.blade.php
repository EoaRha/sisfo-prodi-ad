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
                    <h2 class="text-capitalize font600 mb-10">Bukti Transaksi</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center bg-transparent">
                        <li class="breadcrumb-item"><a class="primary-color" href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active text-capitalize" aria-current="page">Bukti</li>
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
					<h4 class="text-white">Upload Bukti Pembayaran</h4>
				</div>

				<div class="card-body">
					<table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Waktu Pembayaran</th>
                                <th>Kode</th>
                                <th>Total Harga</th>
                                <th>Upload</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach ($orders as $item)
                            <tr style="text-align: center;">
                                <td>{{ date('d-m-y H:i:s', strtotime($item->transaksi_time)) }}</td>
                                <td>{{ $item->tracking_no }}</td>
                                <td>Rp. {{ number_format($item->total) }}</td>

                                @if(empty($item->bukti))
                                
                                <td>
                                    <a href="{{ url('bukti-trans/'.$item->id) }}" class="btn btn-primary" style="background-color: rgba(11, 58, 153, 0.8);">Lihat</a>
                                </td>
                                @else
                                <td>
                                    <span style="background-color: green; border-radius: 10px; margin: 10px; font-weight: bold; color: black; padding: 5px;">Selesai</span>
                                </td>
                                @endif

                                
                            </tr>
                            @endforeach 
                        </tbody>
                    </table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection