@extends('layouts.admin')

@section('title')
	Data Pengajual Judul KKL
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
							<th>Nama Mahasiswa</th>
							<th>NIM</th>
							<th>Kelas</th>
							<th>Judul</th>
							<th>Status</th>
							<th>Update</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						@foreach($kkl as $item)
						<tr>
							<td>{{ $item->nama_mahasiswa }}</td>
							<td>{{ $item->nomor_mahasiswa }}</td>
							<td>{{ $item->kelas }}</td>
							<td>{{ $item->judul }}</td>
							@if($item->status == '0')
							<td><span style="text-align: center; color: #fcba03; font-weight: 600;">Pending</span></td>
							@elseif($item->status == '1')
							<td><span style="text-align: center; color: #06c706; font-weight: 600;">Diterima</span></td>
							@elseif($item->status == '2')
							<td><span style="text-align: center; color: #c70c06; font-weight: 600;">Ditolak</span></td>
							@endif
							<td>
								<a href="" style="font-size: 30px; margin-left: 10px;"><i class="bx bx-pencil"></i></a>
							</td>
							<td>
								<a href="" style="font-size: 30px; margin-left: 10px;"><i class="bx bx-trash"></i></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>

@endsection