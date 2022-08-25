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
					<h4 class="text-white">Form Upload Bukti
						<a href="{{ url('upload-bukti') }}" class="btn btn-warning float-end">Kembali</a>
					</h4>
				</div>

				<div class="card-body">
					<form action="{{ url('update-bukti/'.$orders->id) }}" method="POST" enctype="multipart/form-data">
						@csrf
						@method('PUT')

						<h4>Detail Pengirim
								<span class="float-end" style="font-size: 13px; font-weight: bold;"><u>{{ date('d-m-y H:i:s', strtotime($orders->created_at)) }}</u></span>
							</h4>
							<hr>

							<h5 for="" style="font-weight:bold">No. Transaksi</h5>
							<div class="form-control mb-2">{{ $orders->tracking_no }}</div>

							<h5 for="" style="font-weight:bold">Nama </h5>
							<div class="form-control mb-2">{{ $orders->fname }} {{ $orders->lname }}</div>

							<div class="mb-3">
							  <h5 for="formFile" class="form-label" style="font-weight: bold;">Upload Foto Bukti Transaksi</h5>
							  <input class="form-control" name="bukti" type="file" id="formFile">
							</div>
						<button type="submit" class="btn btn-success float-right mt-3">Upload</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection