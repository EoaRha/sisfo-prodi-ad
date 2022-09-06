<div class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile__bar-inner">
                <a class="logo" href="index.html">
                    <img src="frontend2/images/icon/logo-black.png" alt="Tatee" />
                </a>
                <button class="hamburger hamburger--slider float-right" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="header-nav-menu-mobile">
        <div class="container-fluid">
            <ul class="menu nav-menu menu-mobile">
                <li class="menu-item">
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li class="menu-item menu-item-has-children">
                    <a href="">Program Studi</a>
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="project-grid-full.html">Profile</a>
                        </li>
                        <li class="menu-item">
                            <a href="project-grid-stand.html">Kurikulum</a>
                        </li>
                        <li class="menu-item">
                            <a href="project-masonry.html">Struktural</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item menu-item-has-children">
                    <a href="">Pengajuan</a>
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="my-account.html">Skripsi</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ url('kkl') }}">Kuliah Kerja Lapangan</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item menu-item-has-children">
                    <a href="">Informasi</a>
                    <ul class="sub-menu">
                        <li class="menu-item menu-item-has-children">
                            <a href="">Pengumuman</a>
                            <ul class="sub-menu sub-menu--left">
                                <li class="menu-item">
                                    <a href="blog-detail-sidebar.html">Hasil Pengajuan Skripsi</a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{ url('hasilkkl') }}">Hasil Pengajuan KKL</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a href="blog-grid.html">Berita</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item menu-item-has-children">
                    <a href="">Akreditasi</a>
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="my-account.html">Institusi</a>
                        </li>
                        <li class="menu-item">
                            <a href="">Program Studi</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="contact.html">contact</a>
                </li>
            </ul>
        </div>
    </nav>
</div>