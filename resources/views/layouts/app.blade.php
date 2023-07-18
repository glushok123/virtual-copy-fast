<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@php
	$v = 3;
@endphp
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="@yield('description')">
	<meta name="keywords" content="@yield('keywords')">
	<meta name="title" content="@yield('title')" />
	<meta name="robots" content="index,follow" />
	<meta name="revisit-after" content="2 days">
	<meta name="coverage" content="Worldwide">
	<meta name="distribution" content="Global">
	<link rel="icon" href="{{ asset('images/Логотип копифаст.png') }}" type="image/x-icon">
	<link rel="shortcut icon" href="{{ asset('images/Логотип копифаст.png') }}" type="image/x-icon">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>@yield('title')</title>

	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
	<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}?v{{$v}}" defer></script>
	<link href="https://fonts.cdnfonts.com/css/century-gothic" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}?v{{$v}}" rel="stylesheet">
	<link href="{{ asset('css/font.css') }}" rel="stylesheet">
</head>

<body class="bg-light">
	<div id="app">
		<nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
			<div class="container-fluid"> 
				<a class="navbar-brand" href="{{ url('/') }}">
					<img src="{{ asset('images/Логотип копифаст.png') }}" alt="" width="110" height="auto" class="d-inline-block align-text-top">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}"> <span class="navbar-toggler-icon"></span> </button>
				
				<div class="collapse navbar-collapse" id="navbarSupportedContent" >
					<!-- Left Side Of Navbar -->

					<ul class="navbar-nav justify-content-end ml-auto mx-15" >
						<li class="nav-item "> <a class="nav-link" href="{{ url('/#service') }}">Услуги <span class="sr-only">(current)</span></a> </li>
						<li class="nav-item "> <a class="nav-link" href="{{ url('/service') }}">Цены <span class="sr-only">(current)</span></a> </li>
						<li class="nav-item "> <a class="nav-link" href="{{ url('/delivery') }}">Доставка <span class="sr-only">(current)</span></a> </li>
						<li class="nav-item "> <a class="nav-link" href="{{ url('/pay') }}">Оплата <span class="sr-only">(current)</span></a> </li>
						<li class="nav-item "> <a class="nav-link" href="{{ url('/#kontact') }}">Контакты <span class="sr-only">(current)</span></a> </li>
						<li class="nav-item "> </li>
						<li class="nav-item "> </li>
						<li class="nav-item "> </li>
					</ul>

					<!--form class="form-inline" >
						<input class="form-control mr-sm-2" type="search" placeholder="Мне нужно" aria-label="Search">
					</form-->

				</div>
			</div>
		</nav>

	</div>



	@yield('content')


</body>
</html>