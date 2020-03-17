<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Dashboard | Admin  </title>

        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300">
        <link rel="stylesheet" type="text/css" href="{{ url('cube/css/bootstrap/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('cube/css/libs/font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('cube/css/libs/nanoscroller.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('cube/css/compiled/theme_styles.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('cube/css/compiled/wizard.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('cube/css/libs/ns-default.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ url('cube/css/libs/ns-style-growl.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ url('cube/css/libs/ns-style-bar.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ url('cube/css/libs/ns-style-attached.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ url('cube/css/libs/ns-style-other.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ url('cube/css/libs/ns-style-theme.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ url('css/custom.css') }}"/>

        <!-- Favicon -->
        <link type="image/png" href="{{ url('favicon.png')}}" rel="shortcut icon" />
        @yield('style')
    </head>

    <body class="pace-done fixed-header fixed-leftmenu theme-blue-gradient">
        @yield('content-master')

        <script type="text/javascript">
            var url = function (path) {
                var path = path || '';
                return "{{ Request::root() }}" + "/" + path;
            }
        </script>

        <script src="{{ url('cube/js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ url('cube/js/bootstrap.min.js') }}"></script>
        <script src="{{ url('cube/js/jquery.nanoscroller.min.js') }}"></script>
        <script src="{{ url('cube/js/pace.min.js') }}"></script>
        <script src="{{ url('cube/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ url('cube/js/jquery.dataTables.bootstrap.js') }}"></script>
        <script src="{{ url('cube/js/modernizr.custom.js') }}"></script>
        <script src="{{ url('cube/js/classie.js') }}"></script>
        <script src="{{ url('cube/js/notificationFx.js') }}"></script>
        <script src="{{ url('cube/js/scripts.js') }}"></script>
        <script src="{{ url('cube/js/modalEffects.js') }}"></script>
        @yield('script')
    </body>

</html>
