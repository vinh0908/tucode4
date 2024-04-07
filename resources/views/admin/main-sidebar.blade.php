<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/adminv.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Lê Hữu Vinh</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
          <a href="{{ route('dashboard.index') }}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
          <li class="nav-item">
            <a href="{{ route('admin.product.list') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Product
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('product_category.list') }}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Product Category
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.post.list') }}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Posts
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
