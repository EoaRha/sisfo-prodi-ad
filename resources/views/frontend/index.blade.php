@extends('layouts.front')
@section('title')
	Store Nabawi Herbal
@endsection

@section('content')
	@include('layouts.inc.slider')
	@include('layouts.inc.banner')
	
    <!-- ====== best-seller-product-area-start================================ -->
    <div class="product-area best-seller-product-area pb-40">
        <div class="container">
            <div class="product-content single-product-tab-content">
                <div class="row">
                    <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12 pb-15">
                        <div class="section-title text-center">
                            <span class="theme-color d-block pb-2">Kategori Produk</span>
                            <h3>Top Kategori</h3>
                        </div><!-- /section-title -->
                    </div><!-- /col -->
                </div><!-- /row -->

                <div class="popular-product mt-30">
                    <div class="row product-active2">
                        @foreach($trending_kategori as $tkate)
                        <div class="col-xl-4  col-lg-3  col-md-6  col-sm-6 col-12">
                            <div class="s-p-wrapper">
                                <div class="single-product mb-35">
                                    <div class="single-product-img position-relative over-hidden">
                                        <a class="position-relative d-block" href="{{ url('view-kategori/'.$tkate->slug) }}">
                                            <img class="card-img-top" src="{{ asset('assets/uploads/kategori/'.$tkate->image) }}" alt="Prodcut Image">
                                        </a>
                                    </div><!-- /single-product-img -->
                                    
                                    <div class="single-product-info position-relative mt-25">
                                        <h5><a href="{{ url('kategori/'.$tkate->slug) }}">{{ $tkate->name }}</a></h5>
                                        <ul class="single-product-price d-flex transition-3">
                                            <li>
                                                <span class="primary-color">{{ $tkate->deskripsi }}</span>
                                            </li>
                                        </ul><!-- /single-product-price -->
                                    </div>
                                </div><!-- /single-product -->
                            </div>
                        </div><!-- /col -->
                        @endforeach
                        <!-- Bagian End Section Foreach -->

                    </div><!-- /row -->
                </div>
            </div><!-- /product-content -->
        </div><!-- /container -->
    </div>
    <!-- best-seller-product-area-end  -->	

	<!-- ====== product-off-banner-area-start ========================================= -->
    <div class="banner__area-2 pb-60">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-xl-6 col-lg-6">
                    <div class="banner__item-2 banner-right p-relative mb-30 pr-15">
                        <div class="banner__thumb fix">
                            <a href="product-details.html" class="w-img"><img src="images/banner/banner-big-1.jpg" alt="banner"></a>
                        </div>
                        <div class="banner__content-2 p-absolute transition-3">
                            <span>Products Essentials</span>
                            <h4><a href="product-details.html">Bottle With Wooden Cork</a></h4>
                            <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas.</p>
                            <a href="shop.html" class="web-btn d-inline-block text-uppercase primary-color gray-border2 position-relative over-hidden px-3 ptb-7">shop now <span class="pl-1"><i class="fas fa-long-arrow-alt-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class=" banner__item-2 banner-left p-relative mb-30 pl-15">
                        <div class="banner__thumb fix">
                            <a href="product-details.html" class="w-img"><img src="images/banner/banner-big-2.jpg" alt="banner"></a>
                        </div>
                        <div class="banner__content-2 banner__content-2-right p-absolute transition-3">
                            <span>Products Furniture</span>
                            <h4><a href="product-details.html">Hauteville Plywood Chair</a></h4>
                            <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas.</p>
                            <a href="shop.html" class="web-btn d-inline-block text-uppercase primary-color gray-border2 position-relative over-hidden px-3 ptb-7">shop now <span class="pl-1"><i class="fas fa-long-arrow-alt-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product-off-banner-area-end  -->

	 
    <!-- ====== product-area-start================================ -->
    <div class="product-area pb-40">
        <div class="container">
            <div class="product-content single-product-tab-content">
                <div class="row">
                    <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12 pb-15">
                        <div class="section-title text-center">
                            <span class="theme-color d-block pb-2">Produk Terbaru</span>
                            <h3>Populer Produk</h3>
                        </div><!-- /section-title -->
                    </div><!-- /col -->
                </div><!-- /row -->
                <div class="popular-product mt-30">
                    <div class="row product-active">
                        @foreach($featured_products as $prod)
                        <div class="col-xl-4  col-lg-3  col-md-6  col-sm-6 col-12">
                            <div class="s-p-wrapper">
                                <div class="single-product mb-35">
                                    <div class="single-product-img position-relative over-hidden">
                                        <a class="position-relative d-block" href="{{ url('kategori/'.$prod->kategori->slug.'/'.$prod->slug) }}">
                                            <img src="{{ asset('assets/uploads/products/'.$prod->image) }}" alt="Prodcut Image" width="100%" height="100%">
                                        </a>

                                    </div><!-- /single-product-img -->

                                    <div class="single-product-info position-relative mt-25">
                                        <h6><a href="product-details.html">{{ $prod->name }}</a></h6>
                                        <ul class="single-product-price d-flex transition-3">
                                            <li>
                                                <span class="gray-color pr-2"><del>Rp. {{ number_format($prod->original_price) }}</del></span>
                                                <span class="primary-color">Rp. {{ number_format($prod->selling_price) }}</span>
                                            </li>
                                        </ul><!-- /single-product-price -->
                                    </div>

                                </div><!-- /single-product -->
                            </div>
                        </div><!-- /col -->
                       @endforeach 
                    </div><!-- /row -->
                </div>
            </div><!-- /product-content -->
        </div><!-- /container -->
    </div>
    <!-- product-area-end  -->  

    <!-- ====== service-area-start ========================================= -->
    <div class="service-area border-t-gray border-b-gray pt-45 pb-20 mb-80">
        <div class="container">
            <div class="row">
                <div class="col-xl-3  col-lg-3  col-md-6  col-sm-6 col-12">
                    <div class="single-service d-flex align-items-center justify-content-lg-center mb-25">
                        <div class="s-ser-icon mr-15">
                            <span class="theme-color"><i class="fa-solid fa-truck"></i></span>
                        </div>
                        <div class="s-ser-content">
                            <h5 class="mb-1">Gratis Ongkir</h5>
                            <p class="mb-0">Untuk Min. Order 1 Jt</p>
                        </div>
                    </div>
                </div><!-- /col -->
                <div class="col-xl-3  col-lg-3  col-md-6  col-sm-6 col-12">
                    <div class="single-service d-flex align-items-center justify-content-lg-center mb-25">
                        <div class="s-ser-icon mr-15">
                            <span class="theme-color"><i class="fa-solid fa-arrow-rotate-right"></i></i></span>
                        </div>
                        <div class="s-ser-content">
                            <h5 class="mb-1">Barang Diganti</h5>
                            <p class="mb-0">Jika Cacat/Rusak</p>
                        </div>
                    </div>
                </div><!-- /col -->
                <div class="col-xl-3  col-lg-3  col-md-6  col-sm-6 col-12">
                    <div class="single-service d-flex align-items-center justify-content-lg-center mb-25">
                        <div class="s-ser-icon mr-15">
                            <span class="theme-color"><i class="fa-solid fa-user-shield"></i></span>
                        </div>
                        <div class="s-ser-content">
                            <h5 class="mb-1">Aman & Amanah</h5>
                            <p class="mb-0">Layanan Terbaik</p>
                        </div>
                    </div>
                </div><!-- /col -->
                <div class="col-xl-3  col-lg-3  col-md-6  col-sm-6 col-12">
                    <div class="single-service d-flex align-items-center justify-content-lg-center mb-25">
                        <div class="s-ser-icon mr-15">
                            <span class="theme-color"><i class="fa-solid fa-headset"></i></span>
                        </div>
                        <div class="s-ser-content">
                            <h5 class="mb-1">Layanan Konsultasi</h5>
                            <p class="mb-0">Fast Respon di Jam Kerja</p>
                        </div>
                    </div>
                </div><!-- /col -->
            </div><!-- /row -->
        </div><!-- /container -->
    </div>
    <!-- service-area-end  -->      
@endsection
