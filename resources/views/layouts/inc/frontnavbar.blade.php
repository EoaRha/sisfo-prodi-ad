<div id="header-sticky" class="header-area header-area1 header-transparent">
    <div class="header header-padding ml-185 mr-185">
        <div class="container-fluid">
            <div class="header-mega p-relative">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-xl-2  col-lg-2 col-md-3 col-sm-6 col-7 pr-0 d-flex align-items-center">

                        <!-- Logo -->
                        <div class="logo">
                            <a href="{{ url('/') }}" class="d-block" data-toggle="tooltip" data-selector="true" data-placement="bottom" title="">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                        <!-- Logo -->
                    </div><!-- /col -->

                    <div class="col-xl-4 col-lg-3 col-md-8 col-sm-5 col-4">
                            <div class="header-right d-flex justify-content-end align-items-center">

                                <form action="{{ url('searchproduct') }}" method="POST" class="d-flex">
                                    @csrf
                                    <div class="header-search position-relative d-none d-xl-block" data-toggle="tooltip" data-selector="true" data-placement="bottom" title="Search">

                                        <!-- Search -->
                                        <input type="search" id="search_product" name="product_name" required placeholder="Search" class="border-0 pl-25 theme-color">
                                        <button type="submit" class="input-group-text float-end mt-2" style="background:white;">
                                            <span><i class="fa-solid fa-magnifying-glass"></i></i>
                                            </span>
                                        </button>
                                        <!-- Search -->

                                    </div>
                                </form>

                                <ul>
                                    <li class="h-shop position-relative ml-30">
                                        <div class="header-shopping-cart position-relative">

                                            <!-- Button Cart -->
                                            <a class="dark-black-color" data-toggle="tooltip" data-selector="true" data-placement="bottom" title="Add to cart" href="{{ url('cart') }}">
                                                <i class="fa-solid fa-cart-shopping"></i></i>
                                            </a>
                                            <span class="s-count position-absolute theme-bg white text-center cart-count">0</span>
                                            <!-- Button Cart -->

                                        </div>
                                    </li>
                                </ul>

                                <!-- Wishlist -->
                                <ul class="header-wishlist pl-2 d-none d-md-block">
                                    <li class="position-relative">
                                        <a href="{{ url('wishlist') }}" data-toggle="tooltip" data-selector="true" data-placement="bottom" title="View wishlist" class="dark-black-color">
                                            <span><i class="fa-solid fa-heart"></i></span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- Wishlist -->

                                <!-- Account -->
                                <ul class="header-account d-none d-md-block">
                                    
                                    <li class="d-none d-md-inline-block pl-20">
                                        <a href="{{ route('login') }}" data-toggle="tooltip" data-selector="true" data-placement="bottom" title="My Account" class="dark-black-color">
                                            <span>
                                                <i class="fa-solid fa-circle-user"></i>
                                            </span>
                                        </a>
                                    </li>
                                    
                                </ul>
                                <!-- Account -->

                                <ul class="mobile-menubar mt-1 info-bar d-flex ml-45">
                                    <li>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </li>
                                    <li>
                                        <span></span>
                                        <span class="active"></span>
                                        <span></span>
                                    </li>
                                    <li>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </li>
                                </ul>
                            </div><!-- /header-right -->
                    </div><!-- /col -->


                </div><!-- /row -->
            </div>
        </div><!-- /container -->
    </div>
</div><!-- /header-bottom -->