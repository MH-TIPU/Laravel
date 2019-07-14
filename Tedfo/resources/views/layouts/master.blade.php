<!doctype html>
<html class="no-js ">
<head>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>@yield('title')</title>
    <!-- Favicon-->
    <link rel="icon" href="{{asset('favicon.ico" type="image/x-icon')}}">
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}"/>
    <link rel="stylesheet" href="{{asset('plugins/morrisjs/morris.css')}}" />
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/color_skins.css')}}">



</head>

<body class="theme-green">
<!-- Page Loader -->

<div class="page-loader-wrapper">
    <div class="loader">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <p>Please wait...</p>
        <div class="m-t-30"><img src="{{asset('images/tedfo.png')}}" width="48" height="48" alt="Tedfo Docs"></div>
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div><!-- Search  -->
<div class="search-bar">
    <div class="search-icon"> <i class="material-icons">search</i> </div>
    <input type="text" placeholder="Enter here...">
    <div class="close-search"> <i class="material-icons">close</i> </div>
</div>

<!-- Top Bar -->
<nav class="navbar">
    <div class="col-12">

        <div class="navbar-header">
            <a class="navbar-brand" href="#"><img src="{{asset('images/tedfo.png')}}" width="20" height="20"> </a>
            <a class="navbar-brand" href="#">Tedfo Docs</a>

        </div>

        <ul class="nav navbar-nav navbar-left">
            <li><a href="javascript:void(0);" class="ls-toggle-btn " data-close="true"><i class="zmdi zmdi-swap"></i></a></li>
            <li><a href="#" class="inbox-btn hidden-sm-down" data-close="true"><i class="zmdi zmdi-email"></i></a></li>


        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="zmdi zmdi-search"></i></a></li>
            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-notifications"></i>
                    <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                </a>
                <ul class="dropdown-menu slideDown">
                    <li class="header">NOTIFICATIONS</li>
                    <li class="body">
                        <ul class="menu list-unstyled">
                            <li> <a href="javascript:void(0);">
                                    <div class="icon-circle l-coral"> <i class="material-icons">person_add</i> </div>
                                    <div class="menu-info">
                                        <h4>12 new members joined</h4>
                                        <p> <i class="material-icons">access_time</i> 14 mins ago </p>
                                    </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                    <div class="icon-circle l-turquoise"> <i class="material-icons">add_shopping_cart</i> </div>
                                    <div class="menu-info">
                                        <h4>4 sales made</h4>
                                        <p> <i class="material-icons">access_time</i> 22 mins ago </p>
                                    </div>
                                </a> </li>
                        </ul>
                    </li>
                    <li class="footer"> <a href="javascript:void(0);">View All Notifications</a> </li>

                </ul>
            </li>
            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-flag"></i>
                    <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                </a>
                <ul class="dropdown-menu slideDown">
                    <li class="header">TASKS</li>
                    <li class="body">
                        <ul class="menu tasks list-unstyled">
                            <li> <a href="javascript:void(0);">
                                    <h4> Footer display issue <small>72%</small> </h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                    </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                    <h4> Make new buttons <small>56%</small> </h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                    </div>
                                </a> </li>
                        </ul>
                    </li>
                    <li class="footer"> <a href="javascript:void(0);">View All Tasks</a> </li>
                </ul>
            </li>

            {{--full Screen--}}

            <li>
                <a href="javascript:void(0);" class="fullscreen hidden-sm-down" data-provide="fullscreen" data-close="true">
                    <i class="zmdi zmdi-fullscreen"></i>
                </a>
            </li>

            {{--Log Out--}}

            <li><a href="#" class="mega-menu" data-close="true"><i class="zmdi zmdi-power"></i></a></li>

        </ul>
    </div>
</nav>

<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="{{asset('images/xs/avatar1.jpg')}}" width="48" height="48" alt="User" />
        </div>

        <div class="info-container">
            <div class="name">User</div>
            <div class="email">user@example.com</div>
        </div>

    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active"> <a href="#"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a>

            <li class="open"> <a href="#" class="menu-toggle"><i class="zmdi zmdi-accounts"></i><span>Profiles</span></a>
                <ul class="ml-menu">
                    <li><a href="{{route('buyer.index')}}">Buyer</a> </li>
                    <li><a href="{{route('seller.index')}}">Seller</a> </li>
                    <li><a href="{{route('shipper.index')}}">Shipper</a> </li>
                </ul>
            </li>


            <li>
                <a href="#" class="menu-toggle"><i class="zmdi zmdi-money-box"></i><span>Banks</span></a>
                <ul class="ml-menu">
                    <li><a href="#">Buyer Bank</a> </li>
                    <li><a href="#">Seller Bank</a> </li>
                </ul>
            </li>


            <li> <a href="#"><i class="zmdi zmdi-boat"></i><span>CNF</span> </a> </li>
            <li><a href="#"><i class="zmdi zmdi-codepen"></i><span>Product</span> </a></li>


            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-lock"></i><span>Authentication</span> </a>
                <ul class="ml-menu">
                    <li><a href="#">Sign In</a> </li>
                    <li><a href="#">Sign Up</a> </li>
                    <li><a href="#">Forgot Password</a> </li>
                </ul>
            </li>

        </ul>
    </div>
    <!-- #Menu -->
</aside>



<!-- Main Content -->
<section class="content home">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <small class="text-muted">Welcome to Tedfo Docs</small>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="#"><i class="zmdi zmdi-home"></i> Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
            </div>
        </div>
    </div>
    @yield('content')
</section>

<div class="footer">

</div>

<!-- Jquery Core Js -->
<script src="{{asset('bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->
<script src="{{asset('bundles/vendorscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->

<script src="{{asset('bundles/jvectormap.bundle.js')}}"></script> <!-- JVectorMap Plugin Js -->
<script src="{{asset('bundles/morrisscripts.bundle.js')}}"></script><!-- Morris Plugin Js -->
<script src="{{asset('bundles/sparkline.bundle.js')}}"></script> <!-- Sparkline Plugin Js -->
<script src="{{asset('bundles/knob.bundle.js')}}"></script> <!-- Jquery Knob Plugin Js -->

<script src="{{asset('bundles/mainscripts.bundle.js')}}"></script>
<script src="{{asset('js/pages/index.js')}}"></script>
<script src="{{asset('js/pages/charts/jquery-knob.min.js')}}"></script>

<script scr="{{asset('js/app.js')}}" > </script>


</body>
</html>