<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
    @switch(Route::current()->getName())
      @case("dashboard")
        <style>#home{color: white; background-color: #5E72E4;}</style>
      @break
      @case("Product.show")
      @case("Product.index")
        <style>#products{color: white; background-color: #5E72E4;}</style>
      @break
      @case("Product.create")
        <style>#productCreate{color: white; background-color: #5E72E4;}</style>
      @break
      @case("Service.index")
        <style>#services{color: white; background-color: #5E72E4;}</style>
      @break
      @case("Pet.create")
      @case("Pet.index")
        <style>#pets{color: white; background-color: #5E72E4;}</style>
      @break
      @case("Appointements.create")
        <style>#appointementsClient{color: white; background-color: #5E72E4;}</style>
      @break
      @case("#")
        <style>#users{color: white; background-color: #5E72E4;}</style>
      @break
      @case("Appointements.index")
        <style>#appointements{color: white; background-color: #5E72E4;}</style>
      @break
    @endswitch
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="{{route('dashboard')}}">
          <img src="{{ asset('assets/img/brand/blue.png') }}" class="navbar-brand-img">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{route('dashboard')}}" id="home">
                <i class="fas fa-home text-green"></i>
                <span class="nav-link-text">Inicio</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('Product.index') }}" id="products">
                <i class="fas fa-shopping-bag text-info"></i>
                <span class="nav-link-text">Productos</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('Service.index') }}" id="services">
                <i class="fas fa-briefcase-medical text-danger"></i>
                <span class="nav-link-text">Servicios</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('Pet.index') }}" id="pets">
                <i class="fas fa-paw text-brown"></i>
                <span class="nav-link-text">Mascotas</span>
              </a>
            </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{route('Appointements.index')}}" id="appointements">
                      <i class="ni ni-collection text-red"></i>
                      <span class="nav-link-text">Citas</span>
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
                <a class="nav-link" href="{{route('User.index')}}" id="users">
                  <i class="ni ni-single-02 text-yellow"></i>
                  <span class="nav-link-text">Usuarios</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('Product.create')}}" id="productCreate">
                  <i class="ni ni-single-copy-04 text-info"></i>
                  <span class="nav-link-text">Registrar Producto</span>
                </a>
              </li>
            </ul>
          @endcan
        </div>
      </div>
    </div>
  </nav>
