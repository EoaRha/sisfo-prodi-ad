@extends('layouts.front')
@section('title')
	Order Saya
@endsection

@section('content')
<script type="text/javascript">
	BASE_URL="<?php echo url(''); ?>";
</script>
<div class="slider-area over-hidden">
    <div class="page-height d-flex align-items-center justify-content-center position-relative" data-background="images/slider/page-bg.jpg">
        <div class="slider-shape position-absolute z-index1">
            <span class="slider-bg-round d-block"></span>
        </div>
        <div class="row align-items-center">
            <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                <div class="page-title b-l pt-100 text-center position-relative z-index1">
                    <h2 class="text-capitalize font600 mb-10">Daftar Order</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center bg-transparent">
                        <li class="breadcrumb-item"><a class="primary-color" href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active text-capitalize" aria-current="page">Order</li>
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
				<div class="card-header bg-success">
					<h4 class="text-white">Order Saya
						<a href="{{ 'history' }}" class="btn btn-warning btn-sm float-end">History</a>
					</h4>
				</div>

				<div class="card-body x_content">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th class="exam_sorting" data-sorting_type="asc" data-column_name="created_at" style="cursor: pointer;">
									Tanggal Order<i class="fa-solid fa-sort float-end"></i>
								</th>
								<th>Kode</th>
								<th>Total Harga</th>
								<th class="exam_sorting" data-sorting_type="asc" data-column_name="payment_status" style="cursor: pointer;">Status
									<i class="fa-solid fa-sort float-end"></i>
								</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
						@include('frontend.orders.ajax_data')
						</tbody>
					</table>
				</div>
				<input type="hidden" name="hidden_column_name" id="hidden_column_name" value="created_at">
				<input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc">
			</div>
		</div>
	</div>
</div>

@if(session('alert-success'))
<script>swal("{{session('alert-success')}}")</script>
@elseif(session('alert-failed'))
<script>swal("{{session('alert-failed')}}")</script>
@endif

@endsection