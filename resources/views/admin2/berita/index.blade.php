@extends('layouts.admin')

@section('title')
	Data Berita SI ITB AD
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
					<li class="breadcrumb-item active" aria-current="page">Data Berita</li>
				</ol>
			</nav>
		</div>
	</div>

	<a href="{{ url('add-berita') }}" class="btn-add float-end">Add Berita</a>
	<h6 class="mb-0 text-uppercase">Data Berita SI ITB AD</h6>
	<hr/>
	<div class="card">
		<div class="card-body">
			<div class="table-responsive text-wrap">
				<table id="example2" class="table table-striped table-bordered">
					<thead>
						<tr style="text-align: center;">
							<th>Judul</th>
							<th>Penulis</th>
							<th>Image</th>
							<th>Status</th>
							<th>Trending</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($berita as $item)
						<tr>
							<td>{{ $item->judul }}</td>
							<td>{{ $item->penulis }}</td>
							<td><img src="{{ asset('uploads/berita/'.$item->image)}}" style="width: 50px; height: 50px;"></td>

							@if($item->status == '0')
							<td>Hidden</td>
							@elseif($item->status == '1')
							<td>Show</td>
							@endif

							@if($item->trending == '0')
							<td>Tidak Aktif</td>
							@elseif($item->trending == '1')
							<td>Aktif</td>
							@endif
							<td>
								<a href="{{ url('edit-berita/'.$item->id) }}" style="font-size: 25px; margin-left: 10px; color: rgb(80,80,80);"><i class="bx bx-pencil"></i></a>
							
								<button type="button" style="font-size: 25px;" class="btn" data-bs-toggle="modal" data-bs-target="#{{ $item->slug }}">
								  <i class="bx bx-trash" style="color: rgb(80,80,80);"></i>
								</button>
							</td>
						</tr>
						<!-- Modal -->
						<div class="modal fade" id="{{ $item->slug }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-centered">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel" style="font-weight: 600;">Hapus Berita</h5>
						        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						      </div>
						      <div class="modal-body">
						        <span style="font-weight: 500; font-size: 15px;">Anda Yakin Akan Menghapus Data Berita {{ $item->id }} ?</span>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
						        <a href="{{ url('delete-berita/'.$item->id) }}" class="btn btn-primary">Hapus</a>
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