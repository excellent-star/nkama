{{-- <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-57SQS65');</script>
<!-- End Google Tag Manager --> --}}
<title>NKAMA - @yield('page_title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta charset="utf-8">

<!-- External CSS libraries -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/animate.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{  asset('css/bootstrap-submenu.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-select.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/leaflet.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/map.css') }}" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('fonts/linearicons/style.css') }}">
<link rel="stylesheet" type="text/css"  href="{{ asset('css/jquery.mCustomScrollbar.css') }}">
<link rel="stylesheet" type="text/css"  href="{{ asset('css/dropzone.css') }}">
<link rel="stylesheet" type="text/css"  href="{{ asset('css/slick.css') }}">

{{--  <link rel="stylesheet" type="text/css"  href="usercss/usercssone.css">  --}}










<!-- Custom stylesheet -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" type="text/css" id="style_sheet" href="{{ asset('css/skins/default.css') }}">


{{-- <script data-main="scripts/app" src="scripts/require.js"></script> --}}

{{-- <script src="{{ asset('scripts/require.js')}}"></script> --}}

<!-- Favicon icon -->
{{--  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" >  --}}

<link rel="icon" href="{{ asset('img/logos/nkama1.png') }}" type="image/png">

<!-- Google fonts -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">




<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/ie10-viewport-bug-workaround.css') }}">

<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script  src="{{  asset('js/ie8-responsive-file-warning.js') }}"></script><![endif]-->
<script  src="{{ asset('js/ie-emulation-modes-warning.js') }}"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script  src="js/html5shiv.min.js"></script>
<script  src="js/respond.min.js"></script>
<![endif]-->


