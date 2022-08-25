@extends('layouts.front')
@section('title')
	KATEGORI
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
                    <h2 class="text-capitalize font600 mb-10">Katalog</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center bg-transparent">
                        <li class="breadcrumb-item"><a class="primary-color" href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active text-capitalize" aria-current="page">Kategori</li>
                        </ol>
                    </nav>
                </div><!-- /page title -->
            </div><!-- /col -->
        </div>
    </div><!-- /single-slider -->
</div>

<div class="product-details-area pro-top-thamb pro-bottom-thamb pt-70">
    <div class="container">
        <!-- product-details-tab-area start -->
        <div class="product-details-content product-details-content3">
            <div class="single-product-tab-content product-carousal-area" id="myTabContent2">
                <div class="row">
	                <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
	                    <!-- ====== product-review-area-start============ --> 
	                    <div class="product-view-tab-area product-view-tab-area2 mt-20 pr-35">
	                        
	                        <div class="tab-content mt-30" id="nav-tabContent">
	                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
	                                <div class="describe-area">
	                                    
	                                    <div class="p-review-area mb-125">
	                                        <h5 class="review-title sidebar-title font600 d-block transition-3 shop-b-border2 position-relative pb-25">
	                                        	Semua Kategori
	                                        </h5>
	                                        <div class="row">
	                                        	@foreach($kategori as $kate)
	                                            <div class="col-xl-11  col-lg-12  col-md-12  col-sm- col-">
	                                                <div class="review-comments-area mt-10">
	                                                    <div class="row align-items-center align-items-sm-start align-items-md-center">
	                                                        <div class="col-xl-2  col-lg-2  col-md-2  col-sm-2 col-4 mt-15 pr-3 pr-sm-0 pr-md-3">
	                                                            <div class="client-avatar">
	                                                                <img class="avatar-img width100 height100" src="{{ asset('assets/uploads/kategori/'.$kate->image) }}" alt="">
	                                                            </div>
	                                                        </div><!-- /col -->
	                                                        
	                                                        <div class="col-xl-9  col-lg-9  col-md-10  col-sm-10 col-12 pl-0 mt-10">
	                                                            <div class="review-text pl-30 ml--15">
	                                                                <div class="review-head d-sm-flex justify-content-between align-items-center">
	                                                                    <div class="d-sm-flex">
		                                                                    <h5 class="font600 pr-2">
		                                                                    	{{ $kate->name }}
		                                                                    </h5>
	                                                                    </div>

	                                                                </div><!-- /review-head -->
	                                                                <p class="dc-text1 gray-color2 mb-2 mt-10">
	                                                                    {{ $kate->deskripsi }}
	                                                                </p>
	                                                                <a href="{{ url('kategori/'.$kate->slug) }}" class="d-inline-block text-uppercase primary-color font600">Lihat Produk...<span class="gray-color2 pl-2"><i class="fas fa-long-arrow-alt-right"></i></span></a>
	                                                            </div>
	                                                        </div><!-- /col -->
	                                                    </div><!-- /row -->
	                                                    
	                                                </div>
	                                            </div><!-- /col -->
	                                            @endforeach
	                                        </div><!-- /row --> 
	                                    </div><!-- /review-area -->
	                                </div>
	                            </div><!-- /tab-pane1 -->     
	                        </div> 
	                    </div><!-- product-review-area end -->
	                </div><!-- /col -->
	            </div><!-- /row -->
            </div>
            
        </div><!-- /product-content -->
    </div><!-- /container -->
</div>
<!-- product-area-end  --> 
		
@endsection