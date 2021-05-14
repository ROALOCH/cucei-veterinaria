<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="{{ asset('assets/img/brand/blue.png') }}" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('Service.index') }}">
                <i class="fas fa-first-aid text-red"></i>
                <span class="nav-link-text">Servicios</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('Product.index') }}">
                <i class="fas fa-shopping-bag text-primary"></i>
                <span class="nav-link-text">Productos</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('Pet.index') }}">
                <i class="fas fa-paw text-brown"></i>
                <span class="nav-link-text">Mascotas</span>
              </a>
            </li>
          </ul>
          @can('isAdmin')
            <hr class="my-3">
            <h6 class="navbar-heading p-0 text-muted">
              <span class="docs-normal">Administrador</span>
            </h6>
            <ul class="navbar-nav mb-md-3">
              <li class="nav-item">
                <a class="nav-link" href="examples/profile.html">
                  <i class="ni ni-single-02 text-yellow"></i>
                  <span class="nav-link-text">Usuarios</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="examples/login.html">
                  <i class="ni ni-collection text-green"></i>
                  <span class="nav-link-text">Citas </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="examples/register.html">
                  <i class="ni ni-circle-08 text-pink"></i>
                  <span class="nav-link-text">Register</span>
                </a>
              </li>
            </ul>
          @endcan
        </div>
      </div>
    </div>
  </nav>
