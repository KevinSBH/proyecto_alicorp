<div class="vertical-menu">
    
    <div data-simplebar class="h-100">

        <!-- User details -->
        <div class="user-profile text-center mt-3 user_details">
            <div class="">
                <img src="{{asset('backend/assets/images/users/avatar-1.jpg')}}" alt="" class="avatar-md rounded-circle">
            </div>
            <div class="mt-3 d-flex flex-column align-items-md-start">
                <h4 class="font-size-13 mb-1 poppins-regular">{{ Auth::user()->name }}</h4>
                <h4 class="font-size-13 mb-1 poppins-regular">Administrador</h4>
                <h4 class="font-size-13 mb-1 poppins-regular">{{ Auth::user()->email }}</h4>
            </div>
        </div>

        <!--- Sidemenu -->
        <div class="sidebar-menu-p">
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu list-unstyled" id="side-menu">

                    <li>
                        <a href="{{route('admin.dashboard.inicio')}}" class="waves-effect">
                            <i class="ri-home-3-line"></i>
                            <span>Inicio</span>
                        </a>
                    </li>                               
                    <li>
                        <a href="{{route('admin.dashboard.landing')}}" class="waves-effect">
                            <i class="far fa-list-alt"></i>
                            <span>Landing Promocional</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.dashboard.juegosWeb')}}" class="waves-effect">
                            <i class="ri-home-3-line"></i>
                            <span>Juegos Web</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.dashboard.juegosCamp')}}" class="waves-effect">
                            <i class=" fas fa-volume-up"></i> 
                            <span>Juego Campaña</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('dashboard.configuracion')}}" class="waves-effect">
                            <i class="ri-home-gear-line"></i>
                            <span>Configutaración</span>
                        </a>
                    </li>
                    

                </ul>
            </div>
            <!-- Sidebar -->
            <div id="sidebar-menu">
                <ul class="metismenu list-unstyled" id="side-menu">
                    <li>
                        <a href="{{route('admin.dashboard.inicio')}}" class="waves-effect">
                            <i class="ri-settings-2-line"></i>
                            <span>Configutación</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.logout') }}" class="waves-effect">
                            <i class="ri-shut-down-line"></i>
                            <span>Salir</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>