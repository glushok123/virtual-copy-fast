@extends('layouts.app')

@section('content')

    @include('slider.slider')

<br>
    <div class='container' id="service">
        <center>
            <div class='row justify-content-center'>
                <div class='col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3'>
                    <div class="card service">
                        <div class="card-body" >

                                <a href="{{ url('/service#a') }}">
                                    
                                    <img class="card-img" src="{{ asset('images/Иконки/Печать и сканирование.png') }}" alt="">
                                    <p class="card-text text-center">ПЕЧАТЬ И КОПИРОВАНИЕ</p>
                                </a>

                        </div>
                    </div>
                </div>
                <div class='col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3'>
                    <div class="card service">
                        <div class="card-body" >
                            <a href="{{ url('/service#c') }}">
                                <img class="card-img" src="{{ asset('images/Иконки/Сканирование.png') }}" alt="">
                                <p class="card-text text-center">СКАНИРОВАНИЕ</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class='col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3'>
                    <div class="card service">
                        <div class="card-body justify-content-center" >
                            <a href="{{ url('/service#b') }}">
                                <img class="card-img text-center" src="{{ asset('images/Иконки/Печать широкоформтата.png') }}" alt="">
                                <p class="card-text text-center">ПЕЧАТЬ ШИРОКОФОРМАТА</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class='col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3'>
                    <div class="card service">
                        <div class="card-body" >
                            <a href="{{ url('/service#g') }}">
                                <img class="card-img" src="{{ asset('images/Иконки/Брошюровка.png') }}" alt="">
                                <p class="card-text text-center">БРОШЮРОВКА</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3'>
                    <div class="card service">
                        <div class="card-body" >
                            <a href="{{ url('/service#f') }}">
                                <img class="card-img" src="{{ asset('images/Иконки/Визитки.png') }}" alt="" style="    
                                    width: 100%;
                                    height: auto;"
                                >
                                <p class="card-text text-center">ВИЗИТКИ</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class='col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3'>
                    <div class="card service">
                        <div class="card-body" >
                            <a href="{{ url('/service#d') }}">
                                <img class="card-img" src="{{ asset('images/Иконки/Ламинация.png') }}" alt="">
                                <p class="card-text text-center">ЛАМИНИРОВАНИЕ</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class='col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3'>
                    <div class="card service">
                        <div class="card-body" >
                            <a href="{{ url('/service#e') }}">
                                <img class="card-img" src="{{ asset('images/Иконки/Печати и штампы.png') }}" alt="">
                                <p class="card-text text-center">ПЕЧАТИ И ШТАМПЫ</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class='col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3'>
                    <div class="card service">
                        <div class="card-body" >
                            <a href="{{ url('/service#h') }}">
                                <img class="card-img" src="{{ asset('images/Иконки/Твердый переплет.png') }}" alt="">
                                <p class="card-text text-center">ТВЁРДЫЙ ПЕРЕПЛЁТ</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3'>
                    <div class="card service">
                        <div class="card-body" >
                            <a href="{{ url('/service#j') }}">
                                <img class="card-img" src="{{ asset('images/Иконки/Фотопечать.png') }}" alt="">
                                <p class="card-text text-center">ФОТОПЕЧАТЬ</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class='col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3'>
                    <div class="card service">
                        <div class="card-body" >
                            <a href="{{ url('/service#i') }}">
                                <img class="card-img" src="{{ asset('images/Иконки/Фото на документы.png') }}" alt="">
                                <p class="card-text text-center">ФОТО НА ДОКУМЕНТЫ</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class='col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3'>
                    <div class="card service">
                        <div class="card-body" >
                            <a href="{{ url('/service#l') }}">
                                <img class="card-img" src="{{ asset('images/Иконки/Сувениры.png') }}" alt="">
                                <p class="card-text text-center">СУВЕНИРЫ</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class='col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3'>
                    <div class="card service">
                        <div class="card-body" >
                            <a href="{{ url('/service#k') }}">
                                <img class="card-img" src="{{ asset('images/Иконки/Дизайн.png') }}" alt="">
                                <p class="card-text text-center">ДИЗАИН</p>
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
                            <a href="{{ url('/service#m') }}">
                                <img class="card-img justify-content-center" src="{{ asset('images/Иконки/Дополнительные услуги.png') }}" alt="" >
                                <p class="card-text text-center">ДОПОЛНИТЕЛЬНЫЕ УСЛУГИ</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class='col-3 col-sm-3 col-md-3 col-lg-4 col-xl-4'>

                </div>
            </div>
        </center>
    </div>

    @include('contact.contact')
    <script src="{{ asset('js/swiper.js') }}" defer></script>
@endsection

@section('description', 'Распечатка и оформление будут осуществлены в максимально короткие сроки и с использованием лучших расходников.')
@section('keywords', 'копицентр 24 часа, копировальный центр Москва, копировальный центр круглосуточно, копировальный центр')
@section('title', 'Копицентр Москва, круглосуточный копировальный центр в Москве, Копифаст - 24 часа 7 дней в неделю')
