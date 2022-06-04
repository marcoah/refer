<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @yield('styles')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-chart-bar"></i>
                </div>
                <div class="sidebar-brand-text mx-3">{{ config('app.name', 'Laravel') }}</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Inicio</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <div class="sidebar-heading">Administración</div>

            <!-- ventas y cotizaciones -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseVentas" aria-expanded="true" aria-controls="collapseVentas">
                    <i class="fas fa-money-bill-alt"></i>
                    <span>Ventas</span>
                </a>
                <div id="collapseVentas" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Opciones:</h6>
                        <a class="collapse-item" href="{{ route('carrito.mostrar', ['tipo_doc' => 'CO' ]) }}">Crear Cotización</a>
                        <a class="collapse-item" href="{{ route('carrito.mostrar', ['tipo_doc' => 'FC' ]) }}">Crear Factura</a>
                        <a class="collapse-item" href="#">Reportar Pago de Factura</a>
                        <a class="collapse-item" href="#">Listado de Facturas</a>
                    </div>
                </div>
            </li>

            <!-- Compras -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCompras" aria-expanded="true" aria-controls="collapseCompras">
                    <i class="fas fa-comment-dollar"></i>
                    <span>Compras</span>
                </a>
                <div id="collapseCompras" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Opciones:</h6>
                        <a class="collapse-item" href="#">Recibos</a>
                        <a class="collapse-item" href="#">Pago de Recibo</a>
                        <a class="collapse-item" href="#">Proveedores</a>
                    </div>
                </div>
            </li>

            <!-- Pagos -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagos" aria-expanded="true" aria-controls="collapsePagos">
                    <i class="fas fa-comment-dollar"></i>
                    <span>Pagos</span>
                </a>
                <div id="collapsePagos" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Opciones:</h6>
                        <a class="collapse-item" href="{{ route ('pagos.index') }}">Pagos</a>
                    </div>
                </div>
            </li>

            <!-- Maestros -->
            <hr class="sidebar-divider"><!-- Divider -->
            <div class="sidebar-heading">Maestros</div><!-- Heading -->

            <!-- Clientes -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseClientes" aria-expanded="true" aria-controls="collapseClientes">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Clientes</span>
                </a>
                <div id="collapseClientes" class="collapse" aria-labelledby="headingTracing" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Escoja su opción:</h6>
                        <a class="collapse-item" href="{{ route ('clientes.index') }}">Ver clientes</a>
                        <a class="collapse-item" href="#">Crear un Cliente</a>
                        <a class="collapse-item" href="#">Reportes de Clientes</a>
                    </div>
                </div>
            </li>

            <!-- Proveedores -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProveedores" aria-expanded="true" aria-controls="collapseProveedores">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Proveedores</span>
                </a>
                <div id="collapseProveedores" class="collapse" aria-labelledby="headingTracing" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Escoja su opción:</h6>
                        <a class="collapse-item" href="{{ route ('proveedores.index') }}">Ver Proveedores</a>
                        <a class="collapse-item" href="#">Crear un Proveedores</a>
                        <a class="collapse-item" href="#">Reportes de Proveedores</a>
                    </div>
                </div>
            </li>

            <!-- Productos -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProductos" aria-expanded="true" aria-controls="collapseProductos">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Productos</span>
                </a>
                <div id="collapseProductos" class="collapse" aria-labelledby="headingTracing" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Escoja su opción:</h6>
                        <a class="collapse-item" href="{{ route ('catalogo') }}">Ver catalogo</a>
                        <a class="collapse-item" href="{{ route ('productos.index') }}">Ver articulos</a>
                    </div>
                </div>
            </li>

            <!-- Configuracion -->
            <hr class="sidebar-divider"><!-- Divider -->
            <div class="sidebar-heading">Configuracion</div><!-- Heading -->

            <!-- Categorias -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategorias" aria-expanded="true" aria-controls="collapseCategorias">
                    <i class="fas fa-tasks"></i>
                    <span>Categorias</span>
                </a>
                <div id="collapseCategorias" class="collapse" aria-labelledby="headingTracing" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Escoja su opción:</h6>
                        <a class="collapse-item" href="{{ route ('categorias.index') }}">Ver Categorias</a>
                        <a class="collapse-item" href="#">Crear una categoria</a>
                    </div>
                </div>
            </li>

            <!-- Vendedores -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseVendedores" aria-expanded="true" aria-controls="collapseVendedores">
                    <i class="fas fa-tasks"></i>
                    <span>Vendedores</span>
                </a>
                <div id="collapseVendedores" class="collapse" aria-labelledby="headingTracing" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Escoja su opción:</h6>
                        <a class="collapse-item" href="{{ route ('vendedores.index') }}">Ver vendedores</a>
                        <a class="collapse-item" href="#">Crear un vendedores</a>
                    </div>
                </div>
            </li>

            <!-- Bancos -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBancos" aria-expanded="true" aria-controls="collapseBancos">
                    <i class="fas fa-tasks"></i>
                    <span>Bancos</span>
                </a>
                <div id="collapseBancos" class="collapse" aria-labelledby="headingTracing" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Escoja su opción:</h6>
                        <a class="collapse-item" href="{{ route ('bancos.index') }}">Ver bancos</a>
                        <a class="collapse-item" href="#">Crear un banco</a>
                    </div>
                </div>
            </li>

            <!-- Monedas -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMoneda" aria-expanded="true" aria-controls="collapseMoneda">
                    <i class="fas fa-tasks"></i>
                    <span>Monedas</span>
                </a>
                <div id="collapseMoneda" class="collapse" aria-labelledby="headingTracing" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Escoja su opción:</h6>
                        <a class="collapse-item" href="{{ route ('monedas.index') }}">Ver Monedas</a>
                        <a class="collapse-item" href="#">Crear un Moneda</a>
                    </div>
                </div>
            </li>

            @can('Hacer Envios')
            <hr class="sidebar-divider">
            <!-- Herramientas -->
            <div class="sidebar-heading">Herramientas</div>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEnvios" aria-expanded="true" aria-controls="collapseEnvios">
                    <i class="fas fa-rocket"></i>
                    <span>Mensajeria</span>
                </a>
                <div id="collapseEnvios" class="collapse" aria-labelledby="headingTracing" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Escoja su opción:</h6>
                        <a class="collapse-item" href="{{ route('mensaje-correo') }}"><i class="fas fa-envelope"></i><span> Enviar Correo</span></a>
                        <a class="collapse-item" href="{{ route('mensaje-sms') }}"><i class="fas fa-sms"></i><span> Enviar SMS</span></a>
                        <a class="collapse-item" href="#"><i class="fab fa-whatsapp"></i><span> Enviar WhatsApp</span></a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRecibido" aria-expanded="true" aria-controls="collapseRecibido">
                    <i class="fas fa-inbox"></i>
                    <span>Alertas</span>
                </a>
                <div id="collapseRecibido" class="collapse" aria-labelledby="headingTracing" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Escoja su opción:</h6>
                        <a class="collapse-item" href="#"><i class="fas fa-envelope"></i><span> Correo recibido</span></a>
                        <a class="collapse-item" href="#"><i class="fas fa-sms"></i><span> SMS</span></a>
                        <a class="collapse-item" href="#"><i class="fab fa-whatsapp"></i><span> WhatsApp</span></a>
                    </div>
                </div>
            </li>
            @endcan

            <!-- Reportes -->
            <hr class="sidebar-divider"><!-- Divider -->
            <div class="sidebar-heading">Reportes</div><!-- Heading -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Reportes de venta</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Escoja su reporte:</h6>
                        <a class="collapse-item" href="{{ route('reporte.completo') }}">Completo</a>
                        <a class="collapse-item" href="#">Diario</a>
                        <a class="collapse-item" href="#">Semanal</a>
                        <a class="collapse-item" href="#">Mensual</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card">
                <img class="sidebar-card-illustration mb-2" src="{{ asset('img/undraw_rocket.svg') }}" alt="">
                <p class="text-center mb-2"><strong>{{ config('app.name', 'Laravel') }}</strong> es un producto desarrollado por!</p>
                <a class="btn btn-success btn-sm" href="https://mhconsultoresca.com">M.H. Consultores, C.A.</a>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3"><i class="fa fa-bars"></i></button>
                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="{{ url('home/searchredirect') }}">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" name="search" placeholder="Buscar..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit"><i class="fas fa-search fa-sm"></i></button>
                            </div>
                        </div>
                    </form>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        @php
                        Cart::session(Auth::user()->username);
                        $items = Cart::getContent();
                        @endphp

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-shopping-bag"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">{{ $items->count() }}</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Carrito
                                </h6>
                                @foreach ($items as $item)
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="{{ asset('img/product.svg') }}" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">{{ $item->name }}</div>
                                        <div class="small text-gray-500">{{ $item->quantity }}</div>
                                    </div>
                                </a>
                                @endforeach

                                <a class="dropdown-item text-center small text-gray-500" href="{{ route('carrito.mostrar')}}">Ver carrito</a>
                            </div>
                        </li>

                        <!-- Nav Item - Divider -->
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</span>
                            <img class="img-profile rounded-circle" src="{{ Auth::user()->getAvatarUrl() }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="{{ route('profile') }}">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Perfil
                            </a>
                            <a class="dropdown-item" href="{{ route('settings') }}">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Configuración
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                {{ __('Logout') }}
                            </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; M.H. Consultores, C.A. 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ __('Ready to Leave?') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa-solid fa-xmark"></i>&times;</span>
                    </button>
                </div>
                <div class="modal-body">{{ __('ModalLogout') }}</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">{{ __('Cancel') }}</button>
                    <a class="btn btn-primary" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script> <!-- Incluye Jquery y Bootstrap-->

    <!-- Bootstrap core JavaScript si no se quiere usar app.js
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>-->

    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    @stack('scripts')

</body>
</html>
