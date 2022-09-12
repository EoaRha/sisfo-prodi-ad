@extends('layouts.admin')

@section('title')
	Update Pengajuan Judul Skripsi Mahasiswa
@endsection

@section('content')
<div class="page-content">
	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">Forms</div>
		<div class="ps-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="{{ url('adm-skripsi') }}">Skripsi</a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">Update Pengajuan</li>
				</ol>
			</nav>
		</div>
	</div>
</div>


<form action="{{ url('update-skripsi/'.$skripsi->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
	<div class="row">
		<div class="col-xl-9 mx-auto">
			<h6 class="mb-0 text-uppercase">Data Pengajuan Skripsi Mahasiswa</h6>
			<hr/>
			<div class="card">
				<div class="card-body">
					<div class="input-group mb-3"> <span class="input-group-text" id="inputGroup-sizing-default" style="font-weight: 600">NIM</span>
						<input type="text" readonly value="{{ $skripsi->nomor_mahasiswa }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
					</div>

					<div class="input-group mb-3"> <span class="input-group-text" id="inputGroup-sizing-default" style="font-weight: 600">Kelas</span>
						<input type="text" readonly value="{{ $skripsi->kelas }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
					</div>

					<div class="input-group mb-3"> <span class="input-group-text" id="inputGroup-sizing-default" style="font-weight: 600">Nama</span>
						<input type="text" readonly value="{{ $skripsi->nama_mahasiswa }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-body">
					<div class="input-group mb-3"> <span class="input-group-text" style="font-weight: 600">Judul</span>
						<textarea class="form-control" name="judul" aria-label="With textarea">{{ $skripsi->judul }}</textarea>
					</div>

					<div class="input-group mb-3"> <span class="input-group-text" style="font-weight: 600">Deskripsi</span>
						<textarea class="form-control" name="deskripsi" aria-label="With textarea">{{ $skripsi->deskripsi }}</textarea>
					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-body">
					<div class="input-group mb-3"> <span class="input-group-text" style="font-weight: 600">Catatan</span>
						<textarea class="form-control" name="catatan" placeholder="Jangan dikosongkan, Isi Keterangan Jika Tidak Ada" aria-label="With textarea"></textarea>
					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-body">
					<div class="input-group mb-3"> <span class="input-group-text" id="inputGroup-sizing-default" style="font-weight: 600">Penguji</span>
						<input type="text" name="penguji" class="form-control" aria-label="Sizing example input" placeholder="Jangan dikosongkan, Isi Keterangan Jika Tidak Ada" aria-describedby="inputGroup-sizing-default" required>
					</div>

					<div class="input-group mb-3"> <span class="input-group-text" id="inputGroup-sizing-default" style="font-weight: 600">Pembimbing</span>
						<input type="text" name="pembimbing" class="form-control" aria-label="Sizing example input" placeholder="Jangan dikosongkan, Isi Keterangan Jika Tidak Ada" aria-describedby="inputGroup-sizing-default" required>
					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-body">
					<select class="form-select mb-3" name="status" style="font-weight: 500;" aria-label="Default select example" required>
						<option selected>Pilih Status Pengajuan</option>
						<option value="0" style="color: #fcba03; font-weight: 600;">Pending</option>
						<option value="1" style="color: #06c706; font-weight: 600;">Diterima</option>
						<option value="2" style="center; color: #c70c06; font-weight: 600;">Ditolak</option>
					</select>
				</div>
			</div>
			<hr>
			<button type="submit" class="update-btn">Update</button>
		</div>
	</div>
</form>
@endsection