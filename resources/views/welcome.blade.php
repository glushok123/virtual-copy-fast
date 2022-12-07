@extends('layouts.app')

@section('content')
<br>
    <div class='container' id="service">
        <div class='row'>
            <div class='col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3'>
                <div class="card service">
                    <div class="card-body" >
                        <a href="{{ url('/') }}">
                            <p class="card-text text-center">ПЕЧАТЬ И КОПИРОВАНИЕ</p>
                            <img class="card-img-top" src="{{ asset('images/test.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class='col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3'>
                <div class="card service">
                    <div class="card-body" >
                        <a href="{{ url('/') }}">
                            <p class="card-text text-center">СКАНИРОВАНИЕ</p>
                            <img class="card-img-top" src="{{ asset('images/test.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class='col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3'>
                <div class="card service">
                    <div class="card-body" >
                        <a href="{{ url('/') }}">
                            <p class="card-text text-center">ПЕЧАТЬ ШИРОКОФОРМАТА</p>
                            <img class="card-img-top" src="{{ asset('images/test.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class='col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3'>
                <div class="card service">
                    <div class="card-body" >
                        <a href="{{ url('/') }}">
                            <p class="card-text text-center">БРОШЮРОВКА</p>
                            <img class="card-img-top" src="{{ asset('images/test.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3'>
                <div class="card service">
                    <div class="card-body" >
                        <a href="{{ url('/') }}">
                            <p class="card-text text-center">ВИЗИТКИ</p>
                            <img class="card-img-top" src="{{ asset('images/test.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class='col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3'>
                <div class="card service">
                    <div class="card-body" >
                        <a href="{{ url('/') }}">
                            <p class="card-text text-center">ЛАМИНИРОВАНИЕ</p>
                            <img class="card-img-top" src="{{ asset('images/test.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class='col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3'>
                <div class="card service">
                    <div class="card-body" >
                        <a href="{{ url('/') }}">
                            <p class="card-text text-center">ПЕЧАТИ И ШТАМПЫ</p>
                            <img class="card-img-top" src="{{ asset('images/test.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class='col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3'>
                <div class="card service">
                    <div class="card-body" >
                        <a href="{{ url('/') }}">
                            <p class="card-text text-center">ТВЁРДЫЙ ПЕРЕПЛЁТ</p>
                            <img class="card-img-top" src="{{ asset('images/test.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3'>
                <div class="card service">
                    <div class="card-body" >
                        <a href="{{ url('/') }}">
                            <p class="card-text text-center">ФОТОПЕЧАТЬ</p>
                            <img class="card-img-top" src="{{ asset('images/test.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class='col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3'>
                <div class="card service">
                    <div class="card-body" >
                        <a href="{{ url('/') }}">
                            <p class="card-text text-center">ФОТО НА ДОКУМЕНТЫ</p>
                            <img class="card-img-top" src="{{ asset('images/test.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class='col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3'>
                <div class="card service">
                    <div class="card-body" >
                        <a href="{{ url('/') }}">
                            <p class="card-text text-center">СУВЕНИРЫ</p>
                            <img class="card-img-top" src="{{ asset('images/test.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class='col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3'>
                <div class="card service">
                    <div class="card-body" >
                        <a href="{{ url('/') }}">
                            <p class="card-text text-center">ДИЗАИН</p>
                            <img class="card-img-top" src="{{ asset('images/test.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-3 col-sm-3 col-md-3 col-lg-4 col-xl-4'>

            </div>
            <div class='col-6 col-sm-4 col-md-6 col-lg-4 col-xl-4'>
                <div class="card service justify-content-center">
                    <div class="card-body justify-content-center">
                        <a href="{{ url('/') }}">
                            <p class="card-text text-center">ДОПОЛНИТЕЛЬНЫЕ УСЛУГИ</p>
                            <img class="card-img-top justify-content-center" src="{{ asset('images/test.png') }}" alt="" >
                        </a>
                    </div>
                </div>
            </div>
            <div class='col-3 col-sm-3 col-md-3 col-lg-4 col-xl-4'>

            </div>
        </div>
    </div>

@endsection

@section('description', 'Распечатка и оформление будут осуществлены в максимально короткие сроки и с использованием лучших расходников.')
@section('keywords', 'копицентр 24 часа, копировальный центр Москва, копировальный центр круглосуточно, копировальный центр')
@section('title', 'Копицентр Москва, круглосуточный копировальный центр в Москве, Копифаст - 24 часа 7 дней в неделю')
