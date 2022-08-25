@extends('layouts.admin')
@section('content')

<div class="card">
	<div class="card-header bg-success">
		<h4 class="text-white">User Terdaftar</h4>
		<hr>
	</div>

	<div class="card-body">
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nama</th>
					<th>E-Mail</th>
					<th>Phone</th>
					<th>Action</th>
				</tr>
			</thead>

			<tbody>
				@foreach($users as $item)
				<tr>
					<td>{{ $item->id }}</td>
					<td>{{ $item->name. ' '.$item->lname }}</td>
					<td>{{ $item->email }}</td>
					<td>{{ $item->phone }}</td>

					<td>
						<a href="{{ url('view-user/'.$item->id) }}" class="btn btn-success btn-sm">Lihat</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>	
	</div>
	
</div>

@endsection