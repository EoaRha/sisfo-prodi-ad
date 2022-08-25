<div class="side-mobile-menu bg-white pt-20 pb-30 pl-40 pr-40 pb-100">
    <div class="close-icon float-right mt-20">
        <a class="close-menu d-block" href="javascript:void(0);"><span class="float-end"><i class="fa-solid fa-xmark"></i></span></a>
    </div>

     
    <!-- Logo & About Us -->
    <img class="d-block mt-25" src="images/logo/logo.png" alt="">
    @guest
          @if (Route::has('login'))
          <li class="nav-item">
            
              <a class="nav-link" href="{{ route('login') }}" style="font-weight: 700; color: #404040;">Masuk : <i class="fa-solid fa-right-to-bracket float-end"></i></a>
          </li>
          @endif

          @if (Route::has('register'))
            <li class="nav-item">

                <a class="nav-link" href="{{ route('register') }}" style="font-weight: 700; color: #404040;">Daftar : <i class="fa-solid fa-user-plus float-end"></i></a>
            </li>
          @endif
          
          @else

          <li class="nav-item dropdown">
            Selamat Datang : 
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  {{ __('Keluar') }}
                </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
              </li>                   
          </ul>
        </li>
        @endguest

    <div class="header-search-content position-relative d-block d-xl-none mt--8">
        <form action="{{ url('searchproduct') }}" method="POST" class="position-relative mt-50">
            @csrf
            <!-- Search Mobile -->
            <input class="form-control rounded-0 h5-theme-color px-0" type="search" id="search_product" name="product_name" required placeholder="Ketik Disini...">
            <button type="submit" class="input-group-text float-end mt-2" style="background:white;">
                <span><i class="fa-solid fa-magnifying-glass"></i></i>
                </span>
            </button>
            <!-- Search Mobile -->

        </form>
    </div>
    <div class="mobile-menu mt-10"></div>
    <div class="menu-login pt-10 d-block d-md-none">
        <ul class="header-login d-flex justify-content-between mobile-border-b ">
            <li><a href="login.html">My Account</a></li>
            <li><a href="login.html"><span class=""><i class="fa-solid fa-circle-user"></i></i></span></a></li>
        </ul>
        <ul class="header-heart d-flex justify-content-between mobile-border-b">
            <li><a href="wishlist.html">Wishlist</a></li>
            <li><a href="wishlist.html"><span><i class="far fa-heart"></i></span></a></li>
        </ul>
    </div><!-- /header-right -->

    <div class="language-area d-block clear-both">
        <ul>
            <li class="mb-6">
                <a href="{{ url('/') }}">
                    <span class="pr-6 d-inline-block">
                        <i class="fa-solid fa-house-user"></i>
                    </span>
                    Home
                </a>
            </li>

            <li class="mb-6">
                <a href="{{ url('kategori') }}">
                    <span class="pr-6 d-inline-block">
                        <i class="fa-solid fa-leaf"></i>
                    </span>
                    Kategori
                </a>
            </li>

            <li class="mb-6">
                <a href="{{ url('shop') }}">
                    <span class="pr-6 d-inline-block">
                        <i class="fa-solid fa-shop"></i>
                    </span>
                    Shop
                </a>
            </li>

            <li class="mb-6">
            <a href="{{ url('my-orders') }}">
                    <span class="pr-6 d-inline-block">
                        <i class="fa-solid fa-tags"></i>
                    </span>
                    Orderan
                </a>
            </li>

            <li class="mb-6">
            <a href="{{ url('upload-bukti') }}">
                    <span class="pr-6 d-inline-block">
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                    </span>
                    Bukti Bayar
                </a>
            </li>
        </ul>
    </div><!-- /language -->

    
    <h5 class=" primary-color mt-40 pb-1 border-primary-b d-inline-block">Contact us</h5>
    <ul class="contact-add mt-20">
        <li class="mb-15 primary-color">
            <span class="pr-1"><i class="fas fa-map-marker-alt"></i></span> 
            250 Main Street. USA
        </li>
        <li class="mb-20 primary-color">
            <span class="pr-1"><i class="far fa-envelope"></i></span> 
            supportinfo@gmail.com
        </li>
        <li class="mb-15">
            <a class=" primary-color" href="tell:+898-123-456-98"><span class="pr-1"><i class="fas fa-phone"></i></span> +898 - 123 - 456 - 98</a>
        </li>
    </ul>
    <ul class="social-link pt-2 mb-150">
        <li class="d-inline-block">
            <a class=" primary-color text-center pr-0 d-inline-block transition-3" href="#"><i class="fab fa-facebook-f"></i></a>
        </li>
        
        <li class="d-inline-block">
            <a class=" primary-color text-center pr-0 d-inline-block transition-3" href="#"><i class="fab fa-instagram"></i></a>
        </li>
        
        <li class="d-inline-block">
            <a class=" primary-color text-center pr-0 d-inline-block transition-3" href="#"><i class="fab fa-youtube"></i></a>
        </li>
    </ul><!-- social-link -->
</div><!-- /side-mobile-menu -->