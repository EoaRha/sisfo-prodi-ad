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
                    <h2 class="text-capitalize font600 mb-10">Draft Pembayaran</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center bg-transparent">
                        <li class="breadcrumb-item"><a class="primary-color" href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active text-capitalize" aria-current="page">Bayar</li>
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
				<div class="card-header bg-primary">
					<h4 class="text-white">Lihat Detail Pembayaran
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

						<div class="col-md-6 order-details">
							<h4>Detail Transaksi</h4>
							<hr>
							<h5 class="status-bayar" >{{ $orders->payment_status == '0' ?'Pending' :'Di Proses!' }}</h5>
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>Nama</th>
										<th>Quantity</th>
									</tr>
								</thead>
								
								<tbody>
									@foreach ($orders->orderitems as $item)
									<tr style="text-align:center;">
										<td>{{ $item->products->name }}</td>
										<td>{{ $item->qty }}</td>
									</tr>
									@endforeach	
								</tbody>
							</table>
							<hr>
							<h6><label style="font-weight:bold;">Total Belanja :</label> Rp. {{ number_format($orders->total_belanja) }}</h6><br>
							<h6><label style="font-weight:bold;">Ongos Kirim :</label> Rp. {{ number_format($orders->ongkir) }}</h6>
							<hr>
							<h5><label style="font-weight:bold;">Total Bayar :</label> Rp. {{ number_format($orders->total) }}</h5>

							<br>
							<button id="pay-button" class="button-bayar float-end">Bayar Sekarang</button>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<form action="" id="submit_form" method="POST">
	@csrf
	<input type="hidden" name="json" id="json-callback">
</form>
 <script type="text/javascript">
      // For example trigger on button clicked, or any time you need
      var payButton = document.getElementById('pay-button');
      payButton.addEventListener('click', function () {
        // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
        window.snap.pay('{{$snapToken}}', {
          onSuccess: function(result){
            /* You may add your own implementation here */
            swal("Pembayaran Berhasil");
            send_response_to_form(result);
          },
          onPending: function(result){
            /* You may add your own implementation here */
            swal("Pembayaran Pendding");
            send_response_to_form(result);
          },
          onError: function(result){
            /* You may add your own implementation here */
            swal("Pembayaran Gagal");
            send_response_to_form(result);
          },
          onClose: function(){
            /* You may add your own implementation here */
            swal('Anda Telah Menutup Jendela Pembayaran Tampa Melakukan Transaksi');
          }
        })
      });

      function send_response_to_form(result){
      	document.getElementById('json-callback').value = JSON.stringify(result);
      	$('#submit_form').submit();
      }
    </script>
@endsection