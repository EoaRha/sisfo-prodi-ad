@extends('layouts.admin')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header bg-success">
					<h4>User Detail
						<a href="{{ url('users') }}" class="btn btn-warning btn-sm float-right">Kembali</a>
					</h4>
					<hr>
				</div>

				<div class="card-body">
					<div class="row">
						<div class="col-md-4 mt-3">
							<h4 style="font-weight:bold;">Role</h4>
							<div class="form-control p-2">{{ $users->role_as == '0'? 'User':'Admin' }}</div>
						</div>

						<div class="col-md-4 mt-3">
							<h4 style="font-weight:bold;">Nama Depan</h4>
							<div class="form-control p-2">{{ $users->name }}</div>
						</div>

						<div class="col-md-4 mt-3">
							<h4 style="font-weight:bold;">Nama Belakang</h4>
							<div class="form-control p-2">{{ $users->lname }}</div>
						</div>

						<div class="col-md-4 mt-3">
							<h4 style="font-weight:bold;">E-Mail</h4>
							<div class="form-control p-2">{{ $users->email }}</div>
						</div>

						<div class="col-md-4 mt-3">
							<h4 style="font-weight:bold;">Nomor Handphone</h4>
							<div class="form-control p-2">{{ $users->phone }}</div>
						</div>

						<div class="col-md-4 mt-3">
							<h4 style="font-weight:bold;">Alamat</h4>
							<div class="form-control p-2">{{ $users->alamat }}</div>
						</div>

						<div class="col-md-3 mt-3">
							<h4 style="font-weight:bold;">Provinsi</h4>
							<div class="form-control p-2">{{ $users->provinsi }}</div>
						</div>

						<div class="col-md-3 mt-3">
							<h4 style="font-weight:bold;">Kota</h4>
							<div class="form-control p-2">{{ $users->tipe }} {{ $users->kota }}</div>
						</div>

						<div class="col-md-3 mt-3">
							<h4 style="font-weight:bold;">Kecamatan</h4>
							<div class="form-control p-2">{{ $users->kecamatan }}</div>
						</div>

						<div class="col-md-3 mt-3">
							<h4 style="font-weight:bold;">Kode Pos</h4>
							<div class="form-control p-2">{{ $users->kode_pos }}</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection