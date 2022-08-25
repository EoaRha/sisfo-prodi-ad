<div class="sidebar" data-color="gray" data-active-color="success">
      <div class="logo">
        <a class="simple-text logo-mini">
          <div class="logo-image-small">
            <i class="fa fa-cogs"></i>
          </div>
        </a>
        <a class="simple-text logo-normal">
          Nabawi Herbal
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item {{ Request::is('dashboard') ? 'active':'' }}">
            <a href="{{ url('dashboard') }}" class="nav-link">
              <i class="fa fa-tachometer"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="nav-item {{ Request::is('Kategori') ? 'active':'' }}">
            <a href="{{ url('Kategori') }}">
              <i class="fa fa-sitemap"></i>
              <p>Kategori</p>
            </a>
          </li>
          

          <li class="nav-item {{ Request::is('add-kategori') ? 'active':'' }}">
            <a href="{{ url('add-kategori') }}" class="nav-link">
              <i class="fa fa-plus-square"></i>
              <p>Add Kategori</p>
            </a>
          </li>

          <li class="nav-item {{ Request::is('products') ? 'active':'' }}">
            <a href="{{ url('products') }}" class="nav-link">
              <i class="fa fa-cart-plus"></i>
              <p>Produk</p>
            </a>
          </li>

          <li class="nav-item {{ Request::is('add-products') ? 'active':'' }}">
            <a href="{{ url('add-products') }}" class="nav-link">
              <i class="fa fa-plus-square"></i>
              <p>Add Produk</p>
            </a>
          </li>
          
          <li class="nav-item {{ Request::is('orders') ? 'active':'' }}">
            <a href="{{ url('orders') }}" class="nav-link">
              <i class="fa fa-th-list"></i>
              <p>Order</p>
            </a>
          </li>

          <li class="nav-item {{ Request::is('users') ? 'active':'' }}">
            <a href="{{ url('users') }}" class="nav-link">
              <i class="fa fa-user-circle"></i>
              <p>User</p>
            </a>
          </li>

        </ul>
      </div>
    </div>