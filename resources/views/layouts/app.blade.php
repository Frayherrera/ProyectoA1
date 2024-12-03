<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>NEXUSDEV</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="/css/MenuDashboard.css">
    <!-- CUSTOM JS -->
    <script src="/js/menuD.js" defer></script>


</head>

<body>

    <div id="app">

        <div class="container2">
            <div style="height: auto;" class="menu-dashboard">
                <!-- TOP MENU -->
                <div class="top-menu">
                    <div class="logo">
                        <img src="/img/logo.png" alt="">
                        <span>Menú</span>
                    </div>

                </div>
                <!-- INPUT SEARCH -->
                <div class="toggle">

                    <!-- MENU -->
                    <div style="margin-top: 20px;" class="menu">
                        <a style="color: white;" href="{{ route('home') }}" class="enlace">
                            <i class="bx bx-grid-alt"></i>
                            <span>Dashboard</span>
                        </a>

                        <a style="color: white;" href="{{ route('clientes.index') }}" class="enlace">
                            <i class="bx bx-user"></i>
                            <span>Clientes</span>
                        </a>


                        <a style="color: white;" href="{{ route('vehiculos.index') }}" class="enlace">
                            <i class='bx bxs-car'></i> <span>vehiculos</span>
                        </a>
                        <a style="color: white;" href="{{ route('serviciosVehiculos.index') }}" class="enlace">
                            <i class='bx bx-wrench'></i><span>Servicios</span>
                        </a>
                        <a style="color: white;" href="{{ route('vehiculos.index') }}" class="enlace">
                            <i class='bx bxs-package'></i> <span>inventario</span>
                        </a>
                    </div>
                </div>
            </div>


            <main class="content">
                <div style="margin-left: -20px; margin-top: -20px; margin-bottom: 20px;  margin-right: -20px;">
                    @include('layouts.nadvar')
                </div>
                @yield('content')
            </main>
        </div>


    </div>

</body>

</html>