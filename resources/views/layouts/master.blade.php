<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black">


<link rel="icon" type="image/png" href="{{ url('images/splash/android-chrome-192x192.png') }}" sizes="192x192">
<link rel="apple-touch-icon" sizes="196x196" href="{{ url('images/splash/apple-touch-icon-196x196.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ url('images/splash/apple-touch-icon-180x180.png') }}">
<link rel="apple-touch-icon" sizes="152x152" href="{{ url('images/splash/apple-touch-icon-152x152.png') }}">
<link rel="apple-touch-icon" sizes="144x144" href="{{ url('images/splash/apple-touch-icon-144x144.png') }}">
<link rel="apple-touch-icon" sizes="120x120" href="{{ url('images/splash/apple-touch-icon-120x120.png') }}">
<link rel="apple-touch-icon" sizes="114x114" href="{{ url('images/splash/apple-touch-icon-114x114.png') }}">
<link rel="apple-touch-icon" sizes="76x76" href="{{ url('images/splash/apple-touch-icon-76x76.png') }}">
<link rel="apple-touch-icon" sizes="72x72" href="{{ url('images/splash/apple-touch-icon-72x72.png') }}">
<link rel="apple-touch-icon" sizes="60x60" href="{{ url('images/splash/apple-touch-icon-60x60.png') }}">
<link rel="apple-touch-icon" sizes="57x57" href="{{ url('images/splash/apple-touch-icon-57x57.png') }}">
<link rel="icon" type="image/png" href="{{ url('images/splash/favicon-96x96.png') }}" sizes="96x96">
<link rel="icon" type="image/png" href="{{ url('images/splash/favicon-32x32.png') }}" sizes="32x32">
<link rel="icon" type="image/png" href="{{ url('images/splash/favicon-16x16.png') }}" sizes="16x16">
<link rel="shortcut icon" href="{{ url('images/splash/favicon.ico') }}" type="image/x-icon" />

<title>La esquina de libros</title>

<link href="{{ url('styles/style.css') }}"           rel="stylesheet" type="text/css">
<link href="{{ url('styles/framework.css') }}"       rel="stylesheet" type="text/css">
<link href="{{ url('styles/font-awesome.css') }}"    rel="stylesheet" type="text/css">
<link href="{{ url('styles/animate.css') }}"         rel="stylesheet" type="text/css">
<link href="css/compra.css""        rel="stylesheet" type="text/css">

</head>

<body class="left-sidebar">
  @include('partials.navbar')
<div id="content" class="snap-content">
  <div class="content">
    @yield('content')
  </div>
</div>

<script type="text/javascript" src="{{ url('scripts/jquery.js') }}"></script>
<script type="text/javascript" src="{{ url('scripts/jquerySmooth.js') }}"></script>
<script type="text/javascript" src="{{ url('scripts/jqueryui.js') }}"></script>
<script type="text/javascript" src="{{ url('scripts/framework-plugins.js') }}"></script>
<script type="text/javascript" src="{{ url('scripts/custom.js') }}"></script>

</body>
