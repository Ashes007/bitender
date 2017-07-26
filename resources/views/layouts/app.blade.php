<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title')</title>
<link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
<link href="{{ asset('css/bootstrap-submenu.min.css') }}" rel="stylesheet" >
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
<link href="{{ asset('css/owl.theme.css') }}" rel="stylesheet">
<link href="{{ asset('css/theme.css') }}" rel="stylesheet">
<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
</head>

<body>

@include('layouts.header')

@yield('content')

@include('layouts.footer')


<script src="{{ asset('js/jquery.js') }}"></script> 
<script src="{{ asset('js/bootstrap.min.js') }}"></script> 
<script src="{{ asset('js/owl.carousel.js') }}"></script> 
<script src="{{ asset('js/theme.js') }}"></script> 
<script src="{{ asset('js/custom.js') }}"></script>

</body>
</html>
