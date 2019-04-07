<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name', 'Sistem Informasi Kependudukan') }}</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!--    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">-->
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.18/b-1.5.4/b-print-1.5.4/r-2.2.2/rg-1.1.0/datatables.min.css"/>
    <link rel="stylesheet" href="{{asset('css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="menu-title">Dashboard</li>
                    <li>
                        <a href="{{url('/')}}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    @if(Auth::check() && Auth::user()->tipe == 1)
                    <li class="menu-title">Input Data</li>
                    <li>
                        <a href="{{url('/penduduk')}}"><i class="menu-icon fa fa-user"></i>Data Penduduk </a>
                    </li>
                    <li>
                        <a href="{{url('/keluarga')}}"><i class="menu-icon fa fa-users"></i>Data Keluarga </a>
                    </li>
                    <li>
                        <a href="{{url('/mutasi')}}"><i class="menu-icon fa fa-recycle"></i>Mutasi Penduduk </a>
                    </li>
                    
<!--
                    <li class="menu-title">Pembuatan Surat</li>
                    <li>
                        <a href="#"><i class="menu-icon fa fa-envelope"></i>Surat Pindah </a>
                    </li>
-->
                    @endif
                    <li class="menu-title">Laporan</li>
                    <li>
                        <a href="{{url('/laporan')}}"><i class="menu-icon fa fa-print"></i>Laporan Penduduk </a>
                    </li>
                    @if(Auth::check() && Auth::user()->tipe == 2)
                    <li>
                        <a href="{{url('/user')}}"><i class="menu-icon fa fa-key"></i>Data User </a>
                    </li>
                    @endif
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="{{asset('images/logo.png')}}" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="{{asset('images/logo2.png')}}" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{asset('images/admin.jpg')}}" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
<!--                            <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>-->
                            <a class="nav-link" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <i class="fa fa-power -off"></i>{{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                @yield('content')
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2019
                    </div>
                    <div class="col-sm-6 text-right">
                        Template Designed by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script>
        @if(session('success'))
            swal("Sukses!","{{session('success')}}","success");
        @endif
        @if(session('error'))
            swal("Error!","{{session('error')}}","error");
        @endif
        @if(session('info'))
            swal("Info!","{{session('info')}}","info");
        @endif
        @if(session('warning'))
            swal("Warning!","{{session('warning')}}","warning");
        @endif
    </script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.18/b-1.5.4/b-print-1.5.4/r-2.2.2/rg-1.1.0/datatables.min.js"></script>
    @yield('js')
</body>
</html>
