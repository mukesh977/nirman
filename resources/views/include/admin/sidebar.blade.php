<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <!-- Brand Logo -->

  <a href="{{ route('frontend_index') }}" class="brand-link" target="1" <span
    class="brand-text font-weight-light">Nirman Tools</span>

  </a>



  <!-- Sidebar -->

  <div class="sidebar">

    <!-- Sidebar Menu -->

    <nav class="mt-2">

      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview">
          <a href="{{ route('admin.home') }}" class="nav-link {{ (request()->routeis('admin.home'))?'active':'' }}">

            <i class="fas fa-tachometer-alt"></i>

            <p>

              Dashboard

            </p>

          </a>
        </li>
        {{-- 
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fas fa-home"></i>
            <p>
              CMS
            </p>
            <i class="fas fa-angle-left right"></i>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="{{ route('admin.carosel_create') }}" class="nav-link">

        <i class="fa fa-circle nav-icon"></i>

        <p>Add New Slider</p>

        </a>
        </li>
        <li class="nav-item">

          <a href="{{ route('admin.carosel_index') }}" class="nav-link">

            <i class="fa fa-circle nav-icon"></i>

            <p>Manage Slider</p>

          </a>

        </li>
        <li class="nav-item">
          <a href="{{ route('admin.homepage_picture_index') }}" class="nav-link">
            <i class="fa fa-circle nav-icon"></i>
            <p>Homepage Pictures</p>
          </a>
        </li>

        <li class="nav-item has-treeview">

          <a href="#" class="nav-link">

            <i class="fas fa-user-shield"></i>

            <p>

              Features

            </p>
            <i class="fas fa-angle-left right"></i>

          </a>

          <ul class="nav nav-treeview" style="display: none;">

            <li class="nav-item">

              <a href="{{ route('admin.features_create') }}" class="nav-link">

                <i class="fa fa-circle nav-icon"></i>

                <p>Add Features</p>

              </a>

            </li>

            <li class="nav-item">

              <a href="{{ route('admin.features_index') }}" class="nav-link">

                <i class="fa fa-circle nav-icon"></i>

                <p>Manage</p>

              </a>

            </li>

          </ul>

        </li>

        <li class="nav-item has-treeview">
          <a href="{{ route('admin.about_us_index') }}" class="nav-link">

            <i class="fas fa-address-card"></i>

            <p>

              About Us

            </p>

          </a>
        </li>

        <li class="nav-item has-treeview">

          <a href="#" class="nav-link">

            <i class="fas fa-comments"></i>

            <p>

              Testimonal

            </p>
            <i class="fas fa-angle-left right"></i>

          </a>

          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="{{ route('admin.testimonal_create') }}" class="nav-link">
                <i class="fa fa-circle nav-icon"></i>
                <p>Add Testimonal</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.testimonal_index') }}" class="nav-link">
                <i class="fa fa-circle nav-icon"></i>
                <p>Manage Testimonal</p>
              </a>
            </li>
          </ul>

        </li>

        <li class="nav-item has-treeview">

          <a href="#" class="nav-link">

            <i class="fas fa-handshake"></i>

            <p>

              Partner

            </p>
            <i class="fas fa-angle-left right"></i>

          </a>

          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="{{ route('admin.partner_create') }}" class="nav-link">
                <i class="fa fa-circle nav-icon"></i>
                <p>Add Our Partner</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.partner_index') }}" class="nav-link">
                <i class="fa fa-circle nav-icon"></i>
                <p>Manage Partner</p>
              </a>
            </li>
          </ul>

        </li>

        <li class="nav-item has-treeview">

          <a href="#" class="nav-link">

            <i class="fab fa-chrome"></i>

            <p>

              Pages

            </p>
            <i class="fas fa-angle-left right"></i>

          </a>

          <ul class="nav nav-treeview" style="display: none;">

            <li class="nav-item">

              <a href="{{ route('admin.pages_create') }}" class="nav-link">

                <i class="fa fa-circle nav-icon"></i>

                <p>Add New page</p>

              </a>

            </li>

            <li class="nav-item">

              <a href="{{ route('admin.pages_index') }}" class="nav-link">

                <i class="fa fa-circle nav-icon"></i>

                <p>Manage Pages</p>

              </a>

            </li>

          </ul>

        </li>

        <li class="nav-item has-treeview">
          <a href="{{ route('admin.setting_index') }}" class="nav-link">

            <i class="fas fa-cogs"></i>

            <p>

              Site Setting

            </p>

          </a>
        </li>


      </ul>
      </li> --}}

      <li
        class="nav-item has-treeview {{ (request()->routeis(['admin.product-category.*', 'admin.layout.*', 'admin.product.*', 'admin.product-tag.*' ]))?'menu-open':'' }}">

        <a href="#"
          class="nav-link {{ (request()->routeis(['admin.product-category.*', 'admin.layout.*', 'admin.product.*', 'admin.product-tag.*' ]))?'active':'' }}">

          <i class="fas fa-clipboard-list"></i>

          <p>

            Catalogue

          </p>
          <i class="fas fa-angle-left right"></i>

        </a>

        <ul class="nav nav-treeview">

          <li class="nav-item">

            <a href="{{ route('admin.advertisement.index') }}"
              class="nav-link {{ (request()->routeis('admin.advertisement.*'))?'active':'' }}">

              <i class="fas fa-ad"></i>

              <p>Advertisement</p>

            </a>

          </li>

          <li class="nav-item">

            <a href="{{ route('admin.product-category.index') }}"
              class="nav-link {{ (request()->routeis('admin.product-category.*'))?'active':'' }}">

              <i class="fas fa-sitemap"></i>

              <p>Categories</p>

            </a>

          </li>

          <li class="nav-item">

            <a href="{{ route('admin.layout.index') }}"
              class="nav-link {{ (request()->routeis('admin.layout.*'))?'active':'' }}">

              <i class="fas fa-box"></i>

              <p>Frontend Layouts</p>

            </a>

          </li>

          <li class="nav-item">

            <a href="{{ route('admin.product.index') }}"
              class="nav-link {{ (request()->routeis('admin.product.*'))?'active':'' }}">

              <i class="fas fa-gift"></i>

              <p>Products</p>

            </a>

          </li>

          <li class="nav-item">

            <a href="{{ route('admin.product-tag.index') }}"
              class="nav-link {{ (request()->routeis('admin.product-tag.*'))?'active':'' }}">

              <i class="fas fa-tags"></i>

              <p>Tags</p>

            </a>

          </li>

        </ul>

      </li>

      <li class="nav-item has-treeview">
        <a href="{{ route('admin.media-library.index') }}"
          class="nav-link {{ (request()->routeis('admin.media-library.*'))?'active':'' }}">

          <i class="fas fa-camera"></i>

          <p>

            Media Library

          </p>

        </a>
      </li>


      <li
        class="nav-item has-treeview {{ (request()->routeis(['admin.order.*', 'admin.shipment.*', 'admin.invoice.*']))?'menu-open':'' }}">

        <a href="#"
          class="nav-link {{ (request()->routeis(['admin.order.*', 'admin.shipment.*', 'admin.invoice.*']))?'active':'' }}">

          <i class="fas fa-signal"></i>

          <p>

            Sales

          </p>
          <i class="fas fa-angle-left right"></i>

        </a>

        <ul class="nav nav-treeview">

          <li class="nav-item">

            <a href="{{ route('admin.order.index') }}"
              class="nav-link {{ (request()->routeis('admin.order.*'))?'active':'' }}">

              <i class="fas fa-cart-arrow-down"></i>

              <p>Order</p>

            </a>

          </li>          
          <li class="nav-item">

            <a href="{{ route('admin.shipment.index') }}"
              class="nav-link {{ (request()->routeis('admin.shipment.*'))?'active':'' }}">

              <i class="fas fa-truck"></i>

              <p>Shipment</p>

            </a>

          </li>          
          <li class="nav-item">

            <a href="{{ route('admin.invoice.index') }}"
              class="nav-link {{ (request()->routeis('admin.invoice.*'))?'active':'' }}">

              <i class="fas fa-file-invoice"></i>

              <p>Invoice</p>

            </a>

          </li>          

        </ul>

      </li>


      <li
        class="nav-item has-treeview {{ (request()->routeis(['admin.user_index', 'admin.user_create', 'admin.user_edit' ]))?'menu-open':'' }}">

        <a href="#"
          class="nav-link {{ (request()->routeis(['admin.user_index', 'admin.user_create', 'admin.user_edit' ]))?'active':'' }}">

          <i class="fas fa-user-tie"></i>

          <p>

            Customer

          </p>
          <i class="fas fa-angle-left right"></i>

        </a>

        <ul class="nav nav-treeview">

          <li class="nav-item">

            <a href="{{ route('review.index') }}"
              class="nav-link {{ (request()->routeis('review.*'))?'active':'' }}">

              <i class="fa fa-circle nav-icon"></i>

              <p>Reviews</p>

            </a>

          </li>

          <li class="nav-item">

            <a href="{{ route('admin.user_index') }}"
              class="nav-link {{ (request()->routeis(['admin.user_index', 'admin.user_edit']))?'active':'' }}">

              <i class="fa fa-circle nav-icon"></i>

              <p>Customers</p>

            </a>

          </li>

        </ul>

      </li>
      </ul>

    </nav>

    <!-- /.sidebar-menu -->

  </div>

  <!-- /.sidebar -->

</aside>