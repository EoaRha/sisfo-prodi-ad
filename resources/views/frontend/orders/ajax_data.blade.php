
@foreach ($orders as $item)
<tr style="text-align: center;">
	<td>{{ date('d-m-y H:i:s', strtotime($item->created_at)) }}</td>
	<td>{{ $item->tracking_no }}</td>
	<td>Rp. {{ number_format($item->total) }}</td>
	
	@if($item->payment_status == '0')
	<td>
	<span style="background-color: red; border-radius: 10px; margin: 10px; font-weight: bold; color: black; padding: 5px;">Belum Bayar</span>
	</td>

	@elseif($item->payment_status == 'settlement' or $item->payment_status == 'capture')
	<td>
	<span style="background-color: green; border-radius: 10px; margin: 10px; font-weight: bold; color: black; padding: 5px;">Selesai</span>
	</td>

	@else
	<td>
	<span style="background-color: yellow; border-radius: 10px; margin: 10px; font-weight: bold; color: black; padding: 5px;">{{ $item->payment_status }}</span>
	</td>

	@endif

	@if($item->payment_status == '0')
	<td>
		<a href="{{ url('view-order/'.$item->id) }}" class="btn btn-primary" style="background-color: rgba(11, 58, 153, 0.8);">Bayar</a>
	</td>
	@else
	<td>
		<a href="{{ url('view-trans/'.$item->id) }}" class="btn btn-primary" style="background-color: rgba(11, 58, 153, 0.8);">Lihat</a>
	</td>
	@endif
</tr>
@endforeach	
						