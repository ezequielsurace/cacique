<!DOCTYPE html>
<html class="chrome">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Cacique</title>

        <!-- Favicon-->
        <link rel="icon" type="image/jpg" href="/favicon.png">

        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

        <!-- Custom Css -->
        <!-- <link href="{{ asset('css/login/icon') }}" rel="stylesheet" type="text/css"> -->
        <link href="{{ asset('css/login/main.css') }}" rel="stylesheet">
        <link href="{{ asset('css/login/login.css') }}" rel="stylesheet">
        <link href="{{ asset('css/login/all-themes.css') }}" rel="stylesheet">
        <link href="{{ asset('css/toastr.css') }}" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet"/>
        <link href="https://cdn.datatables.net/responsive/2.2.0/css/responsive.bootstrap.min.css" rel="stylesheet"/>
    </head>

    <body class="theme-cyan" style="background-image: url('/images/background.jpg'); background-repeat: no-repeat;background-size: cover;">
        <div class="authentication">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-9 col-md-8 col-xs-12">
                        <div class="l-detail" style="margin-left: -6%;margin-top: 5%">
                            <h5 style="font-family: skranji; color: #000; font-size: 50px">Welcome to</h5>
                            <h1 style="font-family: lobster; color: #000; font-size: 100px">Cacique</h1>
                        </div>
                    </div>
                    
                    @yield('content')   
                    @yield('modals')    
                    @yield('js')
                </div>
            </div>
        </div>

        <!-- Jquery Core Js --> 
        <script src="{{ asset('js/login/libscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->
        <script src="{{ asset('js/login/vendorscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js --> 
        <script src="{{ asset('js/toastr.js') }}"></script>
        <script src="{{ asset('js/login/mainscripts.bundle.js') }}"></script><!-- Custom Js --> 
    </body>
</html>