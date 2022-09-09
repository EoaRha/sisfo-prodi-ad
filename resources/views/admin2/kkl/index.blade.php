@extends('layouts.admin')

@section('title')
	Data Pengajuan Judul KKL Mahasiswa
@endsection

@section('content')

<div class="page-content">

	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">Tables</div>
		<div class="ps-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="{{ url('dashboard') }}"><i class="bx bx-home-alt"></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">Data KKL</li>
				</ol>
			</nav>
		</div>
	</div>

	<h6 class="mb-0 text-uppercase">Data Pengajuan Judul KKL</h6>
	<hr/>
	<div class="card">
		<div class="card-body">
			<div class="table-responsive text-wrap">
				<table id="example2" class="table table-striped table-bordered">
					<thead>
						<tr style="text-align: center;">
							<th>Id</th>
							<th>Nama Mahasiswa</th>
							<th>NIM</th>
							<th>Kelas</th>
							<th>Judul</th>
							<th>Status</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						@foreach($kkl as $item)
						<tr>
							<td>{{ $item->id }}</td>
							<td>{{ $item->nama_mahasiswa }}</td>
							<td>{{ $item->nomor_mahasiswa }}</td>
							<td>{{ $item->kelas }}</td>
							<td>{{ $item->judul }}</td>
							@if($item->status == '0')
							<td><span style="text-align: center; color: #fcba03; font-weight: 600;">Pending</span></td>
							@elseif($item->status == '1')
							<td><span style="text-align: center; color: #06c706;font-weight: 600;">Diterima</span></td>
							@elseif($item->status == '2')
							<td><span style="text-align: center; color: #c70c06; font-weight: 600;">Ditolak</span></td>
							@endif
							<td>
								<a href="{{ url('edit-kkl/'.$item->id) }}" style="font-size: 25px; margin-left: 10px; color: rgb(80,80,80);"><i class="bx bx-pencil"></i></a>
							
								<button type="button" style="font-size: 25px;" class="btn" data-bs-toggle="modal" data-bs-target="#{{ $item->kelas }}{{$item->nomor_mahasiswa}}">
								  <i class="bx bx-trash" style="color: rgb(80,80,80);"></i>
								</button>
							</td>
						</tr>
						<!-- Modal -->
						<div class="modal fade" id="{{ $item->kelas }}{{$item->nomor_mahasiswa}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-centered">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel" style="font-weight: 600;">Hapus Pengajuan Judul KKL</h5>
						        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						      </div>
						      <div class="modal-body">
						        <span style="font-weight: 500; font-size: 15px;">Anda Yakin Akan Menghapus Data KKL {{ $item->id }} ?</span>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
						        <a href="{{ url('delete-kkl/'.$item->id) }}" class="btn btn-primary">Hapus</a>
						      </div>
						    </div>
						  </div>
						</div>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>

@endsection