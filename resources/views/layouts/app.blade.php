<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'AdminLTE 2')</title>
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/skins/skin-blue.min.css') }}">
    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <!-- Main Header -->
        <header class="main-header">
            <a href="#" class="logo">
                <span class="logo-mini"><b>A</b>LT</span>
                <span class="logo-lg"><b>Admin</b>LTE</span>
            </a>
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Navbar -->
            </nav>
        </header>

        <!-- Sidebar -->
        <aside class="main-sidebar">
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="{{ asset('adminlte/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>Nombre Usuario</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> En línea</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">NAVEGACIÓN PRINCIPAL</li>

                    <!-- Dashboard -->
                    <li class="active">
                        <a href="{{ route('dashboard') }}">
                            <i class="fa fa-tachometer-alt"></i> <span>Dashboard</span>
                        </a>
                    </li>

                    <!-- Ejemplo de Menú con Submenú -->
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-cogs"></i> <span>Configuración</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-user"></i> Perfil</a></li>
                            <li><a href="#"><i class="fa fa-lock"></i> Seguridad</a></li>
                        </ul>
                    </li>

                    <!-- Otros enlaces de menú -->
                    <li>
                        <a href="#">
                            <i class="fa fa-envelope"></i> <span>Mensajes</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-calendar"></i> <span>Calendario</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-file"></i> <span>Documentos</span>
                        </a>
                    </li>

                    <!-- Menú con un enlace adicional -->
                    <li class="header">OTROS</li>
                    <li><a href="#"><i class="fa fa-info-circle"></i> <span>Acerca de</span></a></li>
                </ul>
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>


        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <section class="content">
                @yield('content')
            </section>
        </div>

        <!-- Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2024 <a href="#">Your Company</a>.</strong> All rights reserved.
        </footer>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <!-- AdminLTE JS -->
    <script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
