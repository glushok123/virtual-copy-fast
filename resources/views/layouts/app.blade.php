<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
	<link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
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
    <script src="{{ asset('js/app.js') }}" defer></script>
	<script src="{{ asset('js/swiper.js') }}" defer></script>
	<link href="https://fonts.cdnfonts.com/css/century-gothic" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/font.css') }}" rel="stylesheet">
</head>

<body>
	<div id="app">
		<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
			<div class="container"> 
				<a class="navbar-brand" href="#">
					<img src="{{ asset('images/Логотип копифаст.png') }}" alt="" width="100" height="auto" class="d-inline-block align-text-top">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}"> <span class="navbar-toggler-icon"></span> </button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent" >
					<!-- Left Side Of Navbar -->
					<div class='container-fluid'>
						<div class='row'>
							<ul class="navbar-nav mr-auto justify-content-end">
								<li class="nav-item active"> <a class="nav-link" href="{{ url('/#service') }}">Услуги <span class="sr-only">(current)</span></a> </li>
								<li class="nav-item active"> <a class="nav-link" href="{{ url('/') }}">Цены <span class="sr-only">(current)</span></a> </li>
								<li class="nav-item active"> <a class="nav-link" href="{{ url('/') }}">Доставка <span class="sr-only">(current)</span></a> </li>
								<li class="nav-item active"> <a class="nav-link" href="{{ url('/') }}">Оплата <span class="sr-only">(current)</span></a> </li>
								<li class="nav-item active"> <a class="nav-link" href="{{ url('/#kontact') }}">Контакты <span class="sr-only">(current)</span></a> </li>
							</ul>
						</div>
						<div class='row'>
							<div class="container-fluid">
								<form class="d-flex justify-content-end">
									<button class="btn" type="submit">Мне нужно: </button>
									<!--input class="form-control me-2 search" type="search" placeholder="Поиск" aria-label="Поиск" style="max-width:300px"-->
									<div class="text-field__icon text-field__icon_search">
										<input class="text-field__input" type="text" placeholder="" value="">
									</div>
								</form>

							</div>

						</div>
					</div>

					<!-- Right Side Of Navbar -->
					<ul class="navbar-nav ml-auto">
						<!-- Authentication Links -->

                    </ul>
				</div>
			</div>
		</nav>
	</div>

	<div class='container-fluid'>
		<!-- Slider main container -->
		<div class="swiper">
			<!-- Additional required wrapper -->
			<div class="swiper-wrapper">
				<!-- Slides -->
				<div class="swiper-slide"><img class="" src="{{ asset('images/test.png') }}" alt=""></div>
				<div class="swiper-slide"><img class="" src="{{ asset('images/test.png') }}" alt=""></div>
				<div class="swiper-slide"><img class="" src="{{ asset('images/test.png') }}" alt=""></div>
			</div>
			<!-- If we need pagination -->
			<div class="swiper-pagination"></div>

			<!-- If we need navigation buttons -->
			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>

			<!-- If we need scrollbar -->
			<div class="swiper-scrollbar"></div>
		</div>
	</div>

	@yield('content')

	<div class='container' id="kontact">
		<div class='row'>
			<div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6'>
				<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A969c5de2a77c875ff5ad9f4f778b751e7aa3baf74b272b6afdc12941d0076b53&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
			</div>
			<div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6'>
				<div class='text-center'>
					<h2>Где нас найти?</h2>
					<p>м. Новокузнецкая, Климентовский пер. 6</p>					
					<h2>График</h2>
					<p>Ежедневно с 9:00 до 21:00</p>
				</div>
			</div>
		</div>
	</div>

	<div class='container'>
		<div class='row text-center'>
			<h2>Как с нами связаться?</h2>
			<br>
			<h5 style='color:#b34700'>Для физических лиц:</h5>
			<p><a href="tel:+74959533736">+7(495)953-37-36</a></p>
			<p><a href="tel:+79252777062">+7(925)277-70-62</a></p>
			<p>e-mail: <a href="mailto:info@copy-fast.ru"> info@copy-fast.ru</a></p>
			<br>
			<h5 style='color:#b34700'>Для юридических лиц:</h5>
			<p><a href="tel:+79252777062">+7(925)277-70-62</a></p>
			<p>e-mail: <a href="mailto:info@copy-fast.ru"> info@copy-fast.ru</a></p>
		</div>
	</div>
</body>
</html>