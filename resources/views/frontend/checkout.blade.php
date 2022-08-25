@extends('layouts.front')
@section('title')
	Chechkout
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
                    <h2 class="text-capitalize font600 mb-10">Form Checkout Belanja</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center bg-transparent">
                        <li class="breadcrumb-item"><a class="primary-color" href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active text-capitalize" aria-current="page">Checkout</li>
                        </ol>
                    </nav>
                </div><!-- /page title -->
            </div><!-- /col -->
        </div>
    </div><!-- /single-slider -->
</div>

	<div class="container mt-3">
		<form action="{{ url('place-order') }}" method="POST">
			{{ csrf_field() }}
			<div class="row">
				<div class="col-md-7">
					<div class="card">
						<div class="card-body">
							<h6>Form Pengirim : <span style="color: red;">*Wajib di isi & Berurutan</span></h6>
							<hr>
							<div class="row checkout-form">
								<div class="col-md-6">
									<label for="firstName">Nama Depan</label>
									<input type="text" class="form-control @error('fname') is-invalid @enderror" required value="{{ Auth::user()->name }}" name="fname" placeholder="Masukan Nama Depan">
								</div>

								<div class="col-md-6">
									<label for="lastName">Nama Belakang</label>
									<input type="text" class="form-control @error('lname') is-invalid @enderror" required value="{{ Auth::user()->lname }}" name="lname" placeholder="Masukan Nama Belakang">
								</div>

								<div class="col-md-6 mt-3">
									<label for="email">E-Mail</label>
									<input type="text" class="form-control @error('email') is-invalid @enderror" required value="{{ Auth::user()->email }}" name="email" placeholder="Masukan E-Mail">
								</div>

								<div class="col-md-6 mt-3">
									<label for="phone">Nomor Handphone</label>
									<input type="text" class="form-control @error('phone') is-invalid @enderror" required value="{{ Auth::user()->phone }}" name="phone" placeholder="Masukan Nomor Handphone">
								</div>

								<div class="col-md-12 mt-3">
									<label for="alamat">Alamat </label>
									<input type="text" class="form-control @error('alamat') is-invalid @enderror" required value="{{ Auth::user()->alamat }}" name="alamat" placeholder="Masukan Alamat">
								</div>

								<div class="col-md-12 mt-3">
									<label for="kota" class="float">Kota</label>
									<select name="nama_kota" class="form-control @error('nama_kota') is-invalid @enderror">
										<option value="">-- Pilih Kota --</option>
									</select>

									<input type="hidden"  class="form-control" readonly name="provinsi" value="">
									<input type="hidden"  class="form-control" readonly name="tipe" value="">
									<input type="hidden"  class="form-control" readonly name="kota" value="">
									<input type="hidden"  class="form-control" readonly name="kode_pos" value="">
								</div>

								<div class="col-md-12 mt-3">
									<label for="kecamatan" class="float">Kecamatan</label>
									<select name="nama_kecamatan" class="form-control @error('nama_kecamatan') is-invalid @enderror">
										<option value="">-- Pilih Kecamatan --</option>
									</select>

									<input type="hidden"  class="form-control" readonly name="kecamatan" value="">
								</div>

								<div class="col-md-12 mt-3">
									<label for="ekspedisi">Ekspedisi</label>
									<select name="nama_ekspedisi" class="form-control @error('nama_ekspedisi') is-invalid @enderror">
										<option value="">-- Pilih Kurir --</option>
										<option value="jne">JNE</option>
										<option value="tiki">TIKI</option>
										<option value="pos">POS INDONESIA</option>
										<option value="sicepat">SI CEPAT</option>
										<option value="jnt">J & T</option>
									</select>

									<input type="hidden"  class="form-control" readonly name="ekspedisi" value="">
								</div>

								<div class="col-md-12 mt-3">
									<label for="nama_paket">Paket</label>
									<select name="nama_paket" class="form-control @error('nama_paket') is-invalid @enderror">
										<option value="">-- Pilih Paket --</option>
									</select>

									<input type="hidden"  class="form-control" readonly name="paket" value="">
									<input type="hidden"  class="form-control" readonly name="estimasi" value="">
								</div>

								<!-- <div class="col-md-12 mt-3">
									<label for="nama_paket">Catatan (Opsional)</label>
									<textarea class="form-control" name="message" placeholder="Isi Jika Ada Catatan Yang di Perlukan..."></textarea>
								</div> -->

								<hr class="mt-3">

								

							</div>
						</div>
					</div>
				</div>

				<div class="col-md-5">
					<div class="card">
						<div class="card-body">
							<h6>Detail Order</h6>
							<hr>
							<table class="table table-striped table-bordered">
								<thead>
									<tr>
										<td>Nama</td>
										<td>Qty</td>
										<td>Harga/pcs</td>
									</tr>
								</thead>
								<tbody>
								    @php $totb = 0; 
								         $brt = 0;
								    @endphp
									@foreach($cartitems as $item)
									<tr>
										<td>{{ $item->products->name }}</td>
										<td>{{ $item->prod_qty }}</td>
										<td>{{ $item->products->selling_price }}</td>
									</tr>
									@php
									    $totb += $item->products->selling_price * $item->prod_qty ;
									    $brt += $item->products->weight * $item->prod_qty ;
									@endphp
									@endforeach
								</tbody>
							</table>
							<div class="form-group">
								<label>Total Belanja<span>*</span>
								</label>
								<input type="text" name="total_belanja" style="pointer-events: none;" value="{{ $totb }}" class="form-control @error('total_belanja') is-invalid @enderror" required >
							</div>

							<div class="form-group ">
								<label>Total Berat (gram) </label>
								<input class="form-control @error('berat') is-invalid @enderror" required type="text" value="{{ $brt }}" style="pointer-events: none;" name="berat">
							</div>

							<div class="form-group ">
								<label>Total Ongkos Kirim </label>
								<input class="form-control @error('ongkir') is-invalid @enderror" required type="text" name="ongkir" style="pointer-events: none;">
							</div>

							<div class="form-group ">
								<label>Total Keseluruhan </label>
								<input class="form-control @error('total') is-invalid @enderror" required type="text" name="total" style="pointer-events: none;">
							</div>

							<hr>
							<button type="submit" class="btn btn-primary float-end">Order</button>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>

@endsection