
<aside class="app-sidebar bg-nav-alicorp shadow" data-bs-theme="dark"> 
    <div class="sidebar-brand"> 
        <a href="../index.html" class="brand-link">
            <img src="{{ asset('backend/assets/images/users/avatar-1.jpg') }}" alt="" class="brand-image">
            <span class="brand-text fw-light">
                <b>{{ Auth::user()->name }}</b>  <br>
                <span>ADMINISTRADOR</span><br>
                <span>{{ Auth::user()->email }}</span>
            </span> 
        </a> 
    </div>
    <hr>
    <div class="sidebar-wrapper">
        <nav class="mt-2"> 
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
               
                <li class="nav-item"> 
                    <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') || request()->routeIs('admin.dashboard.mio') ? 'active' : '' }}"> 
                        <i class='nav-icon bx bx-home-alt'></i>
                        <p>Inicio</p>
                    </a> 
                </li>
                <li class="nav-item"> 
                    <a href="{{ route('landing_promocional.index') }}" class="nav-link {{ request()->routeIs('landing_promocional.*') || request()->routeIs('landing_promocional.*.*') ? 'active' : '' }}"> 
                        <i class="nav-icon bi bi-window"></i>
                        <p>Landing Promocional</p>
                    </a> 
                </li>
                <li class="nav-item"> 
                    <a href="{{ route('admin.dashboard.juegosWeb') }}" class="nav-link {{ request()->routeIs('admin.dashboard.juegosWeb') || request()->routeIs('juego_web.*.*') ? 'active' : '' }}"> 
                        <i class="nav-icon bi bi-controller"></i>
                        <p>Juegos Web</p>
                    </a> 
                </li>
                <li class="nav-item"> 
                    <a href="{{ route('admin.dashboard.juegosCamp') }}" class="nav-link {{ request()->routeIs('admin.dashboard.juegosCamp') || request()->routeIs('juego_campana.*.*') ? 'active' : '' }}"> 
                        <i class="nav-icon bi bi-megaphone"></i>
                        <p>Juego Campaña</p>
                    </a> 
                </li>
                <li class="nav-item"> 
                    <a href="{{ route('admin.dashboard.configuracion') }}" class="nav-link {{ request()->routeIs('admin.dashboard.configuracion') ? 'active' : '' }}"> 
                        <i class='nav-icon bx bx-cog'></i>
                        <p>Configuración</p>
                    </a> 
                </li>
            </ul>
        </nav>
        <nav class="mt-auto"> 
            <hr style="width: 100%">
            <ul class="nav sidebar-menu flex-column mt-2" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item"> 
                    <a href="" class="nav-link"> 
                        <i class='nav-icon bx bx-cog'></i>
                        <p>Configuración</p>
                    </a> 
                </li>
                <li class="nav-item"> 
                    <a href="{{ route('admin.logout') }}" class="nav-link"> 
                        <i class="nav-icon bi bi-box-arrow-right"></i>
                        <p>Cerrar Sesión</p>
                    </a> 
                </li>
            </ul>
        </nav>
    </div> 
</aside>