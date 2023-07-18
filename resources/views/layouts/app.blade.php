<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Sistem Prediksi Penjualan Komputer">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @stack('page-title')
    </title>

    @include('include._header-script')
</head>

<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
    <div class="wrapper">
        <aside class="left-sidebar bg-sidebar">
            <div id="sidebar" class="sidebar">
                <!-- name -->
                <div class="app-brand">
                    <a href="{{url('prediksi')}}" title="KELOMPOK3">
                        <span class="brand-name text-truncate">KELOMPOK 3</span>
                    </a>
                </div>
                <div class="sidebar-scrollbar">
                    @include('include._sidebar')
                </div>
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="content-wrapper">
                <header class="main-header " id="header">
                    @include('include._navbar')
                </header>
                <div class="content">
                    @yield('content')
                </div>
            </div>

            <footer class="footer mt-auto">
                <div class="copyright bg-white">
                    <p>
                        &copy; <span id="copy-year">2023 Copyright</span>
                    </p>
                </div>
                <script>
                    let d = new Date();
                    let year = d.getFullYear();
                    document.getElementById("copy-year").innerHTML = year + ' Copyright Laka Arane';
                </script>
            </footer>
        </div>
    </div>
    @include('include._footer-script')
</body>

</html>