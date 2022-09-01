@extends('layouts.front2')

@section('meta')
    <meta name="description" content="Sisem ini merupakan sistem yang dikelola lansung oleh Prodi SI ITB AD. Sebagai media informasi dan Kegiatan Progaram Studi Sistem Informasi ITB AD">
    <meta name="author" content="XRha">
    <meta name="keywords" content="ITB AD, SI, Sistem Informasi, KKL, Skripsi, Sisfo, Akademik, Prodi">
    <meta name="robots" content="index, follow">
@endsection

@section('title')
    Situs Resmi Sistem Informasi Institut Teknologi Dan Bisnis Ahmad Dahlan
@endsection

@section('content2')
    
    @include('layouts.inc2.frontslider')

<!-- ABOUT US-->
<section class="p-t-10 p-b-55">
    <div class="container">
        <div class="media-about">
            <div class="row">
                <div class="col-lg-7">
                    <div class="media__body">
                        <h5 class="title-sub">about us</h5>
                        <h2 class="title-1">We are specialists in the field of architecture</h2>
                        <p class="media__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt utins labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco cot laboris nisi ut aliquip ex
                            ea commodo consequat. Duis aute irure dolor in reprehenderit in vactil oluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.</p>
                        <a class="au-btn au-btn--arrow" href="about-us.html">Read more
                            <i class="zmdi zmdi-arrow-right ic-arrow"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="media__img js-line">
                        <img src="frontend2/images/about-01.jpg" alt="About">
                        <span class="line"></span>
                        <span class="line line-bottom"></span>
                        <div class="media__img-inner wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                            <span class="number">28</span>
                            <span class="desc">years of experience</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END ABOUT US-->

<!-- SERVICE-->
<section class="p-t-60 p-b-55">
    <div class="container">
        <div class="section-title">
            <h5 class="title-sub">what we do</h5>
            <h2 class="title-1">Our specilization</h2>
        </div>
        <div class="row no-gutters">
            <div class="col-md-6 col-lg-4">
                <article class="media media-service">
                    <figure class="media__img">
                        <img src="frontend2/images/icon/service-01.png" alt="architecture" />
                    </figure>
                    <div class="media__title">
                        <h3 class="title">
                            <a href="#">architecture</a>
                        </h3>
                        <span class="number">01</span>
                    </div>
                    <p class="media__text">Lorem ipsum dolor sit amet, consectetur adipist pricing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </article>
            </div>
            <div class="col-md-6 col-lg-4">
                <article class="media media-service">
                    <figure class="media__img">
                        <img src="frontend2/images/icon/service-02.png" alt="Interior" />
                    </figure>
                    <div class="media__title">
                        <h3 class="title">
                            <a href="#">Interior</a>
                        </h3>
                        <span class="number">02</span>
                    </div>
                    <p class="media__text">Lorem ipsum dolor sit amet, consectetur adipist pricing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </article>
            </div>
            <div class="col-md-6 col-lg-4">
                <article class="media media-service">
                    <figure class="media__img">
                        <img src="frontend2/images/icon/service-03.png" alt="planning" />
                    </figure>
                    <div class="media__title">
                        <h3 class="title">
                            <a href="#">planning</a>
                        </h3>
                        <span class="number">03</span>
                    </div>
                    <p class="media__text">Lorem ipsum dolor sit amet, consectetur adipist pricing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </article>
            </div>
        </div>
    </div>
</section>
<!-- END SERVICE-->

<!-- LASTEST PROJECT-->
<section class="wrap wrap--w1790 p-b-75">
    <div class="section-title m-b-70">
        <h5 class="title-sub">our work</h5>
        <h2 class="title-1">Latest project</h2>
    </div>
    <div class="container-fluid">
        <div class="slick-wrap slick-project js-slick-wrapper" data-slick-xs="1" data-slick-sm="1" data-slick-md="3" data-slick-lg="4" data-slick-xl="4" data-slick-dots="false" data-slick-customnav="true" data-slick-autoplay="true">
            <div class="slick-wrap-content">
                <div class="slick-content js-slick-content">
                    <div class="slick-item">
                        <article class="media media-project">
                            <figure class="media__img">
                                <img src="frontend2/images/project-01.jpg" alt="luxury villa" />
                            </figure>
                            <div class="bg-overlay"></div>
                            <span class="line"></span>
                            <span class="line line--bottom"></span>
                            <div class="media__body">
                                <h3 class="title">
                                    <a href="project-detail-1.html">luxury villa</a>
                                </h3>
                                <div class="address">Perth, Australia</div>
                            </div>
                        </article>
                    </div>
                    <div class="slick-item">
                        <article class="media media-project">
                            <figure class="media__img">
                                <img src="frontend2/images/project-02.jpg" alt="wooden villa" />
                            </figure>
                            <div class="bg-overlay"></div>
                            <span class="line"></span>
                            <span class="line line--bottom"></span>
                            <div class="media__body">
                                <h3 class="title">
                                    <a href="project-detail-1.html">wooden villa</a>
                                </h3>
                                <div class="address">New York, USA</div>
                            </div>
                        </article>
                    </div>
                    <div class="slick-item">
                        <article class="media media-project">
                            <figure class="media__img">
                                <img src="frontend2/images/project-03.jpg" alt="Skyline" />
                            </figure>
                            <div class="bg-overlay"></div>
                            <span class="line"></span>
                            <span class="line line--bottom"></span>
                            <div class="media__body">
                                <h3 class="title">
                                    <a href="project-detail-1.html">Skyline</a>
                                </h3>
                                <div class="address">Michigan, USA</div>
                            </div>
                        </article>
                    </div>
                    <div class="slick-item">
                        <article class="media media-project">
                            <figure class="media__img">
                                <img src="frontend2/images/project-04.jpg" alt="Frozen house" />
                            </figure>
                            <div class="bg-overlay"></div>
                            <span class="line"></span>
                            <span class="line line--bottom"></span>
                            <div class="media__body">
                                <h3 class="title">
                                    <a href="project-detail-1.html">Frozen house</a>
                                </h3>
                                <div class="address">Mexico</div>
                            </div>
                        </article>
                    </div>
                    <div class="slick-item">
                        <article class="media media-project">
                            <figure class="media__img">
                                <img src="frontend2/images/project-29.jpg" alt="luxury villa" />
                            </figure>
                            <div class="bg-overlay"></div>
                            <span class="line"></span>
                            <span class="line line--bottom"></span>
                            <div class="media__body">
                                <h3 class="title">
                                    <a href="project-detail-1.html">luxury villa</a>
                                </h3>
                                <div class="address">Perth, Australia</div>
                            </div>
                        </article>
                    </div>
                    <div class="slick-item">
                        <article class="media media-project">
                            <figure class="media__img">
                                <img src="frontend2/images/project-30.jpg" alt="wooden villa" />
                            </figure>
                            <div class="bg-overlay"></div>
                            <span class="line"></span>
                            <span class="line line--bottom"></span>
                            <div class="media__body">
                                <h3 class="title">
                                    <a href="project-detail-1.html">wooden villa</a>
                                </h3>
                                <div class="address">New York, USA</div>
                            </div>
                        </article>
                    </div>
                    <div class="slick-item">
                        <article class="media media-project">
                            <figure class="media__img">
                                <img src="frontend2/images/project-31.jpg" alt="wooden villa" />
                            </figure>
                            <div class="bg-overlay"></div>
                            <span class="line"></span>
                            <span class="line line--bottom"></span>
                            <div class="media__body">
                                <h3 class="title">
                                    <a href="project-detail-1.html">wooden villa</a>
                                </h3>
                                <div class="address">New York, USA</div>
                            </div>
                        </article>
                    </div>
                    <div class="slick-item">
                        <article class="media media-project">
                            <figure class="media__img">
                                <img src="frontend2/images/project-32.jpg" alt="Skyline" />
                            </figure>
                            <div class="bg-overlay"></div>
                            <span class="line"></span>
                            <span class="line line--bottom"></span>
                            <div class="media__body">
                                <h3 class="title">
                                    <a href="project-detail-1.html">Skyline</a>
                                </h3>
                                <div class="address">Michigan, USA</div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <div class="slick__nav arrows-1">
                <i class="slick-prev slick-arrow js-slick-prev ti-angle-left"></i>
                <i class="slick-next slick-arrow js-slick-next ti-angle-right"></i>
            </div>
        </div>
    </div>
</section>
<!-- END LASTEST PROJECT-->

<!-- TESTI-->
<section class="p-t-35 p-b-85">
    <div class="container">
        <div class="section-title m-b-80">
            <h5 class="title-sub">testimonial</h5>
            <h2 class="title-1">What people say</h2>
        </div>
        <div class="slick-wrap slick-testi js-slick-wrapper" data-slick-xs="1" data-slick-sm="1" data-slick-md="1" data-slick-lg="2" data-slick-xl="2" data-slick-customnav="true" data-slick-autoplay="true">
            <div class="slick-wrap-content">
                <div class="slick-content js-slick-content">
                    <div class="slick-item">
                        <div class="media-testi">
                            <p class="media__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat.</p>
                            <div class="media__title">
                                <span class="ti-quote-left quote"></span>
                                <h4 class="name">
                                    <a href="#">Pearl Rivera</a>
                                </h4>
                                <span class="job">Au Founder</span>
                            </div>
                            <figure class="media__img img--rounded">
                                <img src="frontend2/images/testi-01.jpg" alt="Pearl Rivera" />
                            </figure>
                        </div>
                    </div>
                    <div class="slick-item">
                        <div class="media-testi">
                            <p class="media__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat.</p>
                            <div class="media__title">
                                <span class="ti-quote-left quote"></span>
                                <h4 class="name">
                                    <a href="#">Ray Owens</a>
                                </h4>
                                <span class="job">Loco CEO</span>
                            </div>
                            <figure class="media__img img--rounded">
                                <img src="frontend2/images/testi-02.jpg" alt="Ray Owens" />
                            </figure>
                        </div>
                    </div>
                    <div class="slick-item">
                        <div class="media-testi">
                            <p class="media__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat.</p>
                            <div class="media__title">
                                <span class="ti-quote-left quote"></span>
                                <h4 class="name">
                                    <a href="#">Megan Fernandez</a>
                                </h4>
                                <span class="job">BigBit Founder</span>
                            </div>
                            <figure class="media__img img--rounded">
                                <img src="frontend2/images/testi-03.jpg" alt="Megan Fernandez" />
                            </figure>
                        </div>
                    </div>
                    <div class="slick-item">
                        <div class="media-testi">
                            <p class="media__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat.</p>
                            <div class="media__title">
                                <span class="ti-quote-left quote"></span>
                                <h4 class="name">
                                    <a href="#">Jack Hopkins</a>
                                </h4>
                                <span class="job">Bitbucket CEO</span>
                            </div>
                            <figure class="media__img img--rounded">
                                <img src="frontend2/images/testi-04.jpg" alt="Jack Hopkins" />
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slick__nav arrows-1">
                <i class="slick-prev slick-arrow js-slick-prev ti-angle-left"></i>
                <i class="slick-next slick-arrow js-slick-next ti-angle-right"></i>
            </div>
        </div>
    </div>
</section>
<!-- END TESTI-->

<!-- CLIENT-->
<section class="p-t-15">
    <div class="container">
        <div class="section-title m-b-100">
            <h5 class="title-sub">awesome partner</h5>
            <h2 class="title-1">Our clients</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <a class="img-client" href="#">
                    <img src="frontend2/images/icon/client-01.png" alt="Client 1">
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a class="img-client" href="#">
                    <img src="frontend2/images/icon/client-02.png" alt="Client 2">
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a class="img-client" href="#">
                    <img src="frontend2/images/icon/client-03.png" alt="Client 3">
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a class="img-client" href="#">
                    <img src="frontend2/images/icon/client-04.png" alt="Client 4">
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a class="img-client" href="#">
                    <img src="frontend2/images/icon/client-05.png" alt="Client 5">
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a class="img-client" href="#">
                    <img src="frontend2/images/icon/client-06.png" alt="Client 6">
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a class="img-client" href="#">
                    <img src="frontend2/images/icon/client-07.png" alt="Client 7">
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a class="img-client" href="#">
                    <img src="frontend2/images/icon/client-08.png" alt="Client 8">
                </a>
            </div>
        </div>
    </div>
</section>
<!-- END CLIENT-->

<!-- BLOG-->
<section class="p-t-65 p-b-65">
    <div class="container">
        <div class="section-title m-b-70">
            <h5 class="title-sub">from the blog</h5>
            <h2 class="title-1">Latest new</h2>
        </div>
        <div class="row gutter-xl">
            <div class="col-md-6">
                <article class="blog">
                    <figure class="entry-image">
                        <a href="blog-grid.html">
                            <img src="frontend2/images/blog-01.jpg" alt="the  villa overlooks dramatic mountainous scenery" />
                        </a>
                    </figure>
                    <div class="entry-summary">
                        <h4 class="entry-title">
                            <a href="blog-grid.html">the villa overlooks dramatic mountainous scenery</a>
                        </h4>
                        <span class="entry-meta">12 - August - 2018</span>
                        <p class="entry-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidis idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud ercaus itation ullamco laboris nisi ut aliquip . .
                            .</p>
                    </div>
                </article>
            </div>
            <div class="col-md-6">
                <article class="blog">
                    <figure class="entry-image">
                        <a href="blog-grid.html">
                            <img src="frontend2/images/blog-02.jpg" alt="Will Bruder clads a mountain home in Aspen" />
                        </a>
                    </figure>
                    <div class="entry-summary">
                        <h4 class="entry-title">
                            <a href="blog-grid.html">Will Bruder clads a mountain home in Aspen</a>
                        </h4>
                        <span class="entry-meta">12 - August - 2018</span>
                        <p class="entry-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidis idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud ercaus itation ullamco laboris nisi ut aliquip . .
                            .</p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
<!-- END BLOG-->
@endsection