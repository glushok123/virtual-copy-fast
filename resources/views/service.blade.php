@extends('layouts.app')


@section('content')

<br>
    <div class='container-fluid' id="service-tab">
        <div class='row'>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <ul class="nav nav-tabs ">
                    <li class="nav-item">
                        <a class="nav-link custom-tab-link active " data-toggle="tab" href="#a">ПЕЧАТЬ И КОПИРОВАНИЕ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-tab-link" data-toggle="tab" href="#b">ПЕЧАТЬ ШИРОКОФОРМАТА</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-tab-link" data-toggle="tab" href="#c">СКАНИРОВАНИЕ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-tab-link" data-toggle="tab" href="#d">ЛАМИНИРОВАНИЕ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-tab-link" data-toggle="tab" href="#e">ПЕЧАТЬ И ШТАМПЫ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-tab-link" data-toggle="tab" href="#f">ВИЗИТКИ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-tab-link" data-toggle="tab" href="#g">БРОШЮРОВКА</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-tab-link" data-toggle="tab" href="#h">ТВЕРДЫЙ ПЕРЕПЛЕТ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-tab-link" data-toggle="tab" href="#i">ФОТО НА ДОКУМЕНТЫ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-tab-link" data-toggle="tab" href="#j">ФОТОПЕЧАТЬ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-tab-link" data-toggle="tab" href="#k">ДИЗАЙН</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-tab-link" data-toggle="tab" href="#l">СУВЕНИРЫ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-tab-link" data-toggle="tab" href="#m">ДОПОЛНИТЕЛЬНЫЕ УСЛУГИ</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">
                <div class="tab-content text-center">
                    <div class="tab-pane fade show active" id="a">
                        <div class="container">
                            <h3>ЦЕНЫ НА ПЕЧАТЬ И КОПИРОВАНИЕ</h3>
                            <h5>ДЛЯ ФИЗИЧЕСКИХ ЛИЦ</h5>
                            <br>
                            @include('price.black_printing')
                            @include('price.white_printing')
                        </div>
                    </div>
                    <div class="tab-pane fade" id="b">
                        <div class="container">
                            <h3>ЦЕНЫ НА ШИРОКОФОРМАТНУЮ ПЕЧАТЬ</h3>
                            <h5>ДЛЯ ФИЗИЧЕСКИХ ЛИЦ</h5>
                            <br>
                            @include('price.shirokoformat_printing')
                        </div>                        
                    </div>
                    <div class="tab-pane fade" id="c">
                        <div class="container">
                            <h3>ЦЕНЫ НА СКАНИРОВАНИЕ</h3>
                            <h5>ДЛЯ ФИЗИЧЕСКИХ ЛИЦ</h5>
                            <br>
                            @include('price.scaning')
                        </div>
                    </div>
                    <div class="tab-pane fade" id="d">
                        <div class="container">
                            <h3>ЦЕНЫ НА ЛАМИНИРОВАНИЕ</h3>
                            <h5>ДЛЯ ФИЗИЧЕСКИХ ЛИЦ</h5>
                            <br>
                            @include('price.laminirovanie')
                        </div>
                    </div>
                    <div class="tab-pane fade" id="e">
                        <div class="container">
                            <h3>ЦЕНЫ НА ПЕЧАТИ И ШТАМПЫ</h3>
                            <h5>ДЛЯ ФИЗИЧЕСКИХ ЛИЦ</h5>
                            <br>
                            @include('price.petchat_and_shtamps')
                        </div>
                    </div>
                    <div class="tab-pane fade" id="f">
                        <div class="container">
                            <h3>ЦЕНЫ НА ВИЗИТКИ</h3>
                            <h5>ДЛЯ ФИЗИЧЕСКИХ ЛИЦ</h5>
                            <br>
                            @include('price.vizitki')
                        </div>
                    </div>
                    <div class="tab-pane fade" id="g">
                        <div class="container">
                            <h3>ЦЕНЫ НА БРОШЮРОВКУ</h3>
                            <h5>ДЛЯ ФИЗИЧЕСКИХ ЛИЦ</h5>
                            <br>
                            @include('price.broshurovka')
                        </div>
                    </div>
                    <div class="tab-pane fade" id="h">
                        <div class="container">
                            <h3>ЦЕНЫ НА ТВЕРДЫЙ ПЕРЕПЛЁТ</h3>
                            <h5>ДЛЯ ФИЗИЧЕСКИХ ЛИЦ</h5>
                            <br>
                            @include('price.tverdei_pereplet')
                        </div>
                    </div>
                    <div class="tab-pane fade" id="i">
                        <div class="container">
                            <h3>ЦЕНЫ НА ФОТО НА ДОКУМЕНТЫ</h3>
                            <h5>ДЛЯ ФИЗИЧЕСКИХ ЛИЦ</h5>
                            <br>
                            @include('price.foto_by_document')
                        </div>
                    </div>
                    <div class="tab-pane fade" id="j">
                        <div class="container">
                            <h3>ФОТОПЕЧАТЬ</h3>
                            <h5>ДЛЯ ФИЗИЧЕСКИХ ЛИЦ</h5>
                            <br>
                            @include('price.fotopetchat')
                        </div>
                    </div>
                    <div class="tab-pane fade" id="k">
                        11
                    </div>
                    <div class="tab-pane fade" id="l">
                        12
                    </div>
                    <div class="tab-pane fade" id="m">
                        <div class="container">
                            <h3>ДОПОЛНИТЕЛЬНЫЕ УСЛУГИ</h3>
                            <h5>ДЛЯ ФИЗИЧЕСКИХ ЛИЦ</h5>
                            <br>
                            @include('price.dop_service')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const url = window.location.href;

        if (url.includes('#')){
            let id =  url.substr(url.length - 1);

            $('.nav-link.active').removeClass('active')
            $('.tab-pane.active').removeClass('active')
            $('.tab-pane.show').removeClass('show')
            $('a[href="#' + id + '"]').addClass('active');
            $('#' + id + '').addClass('active')
            $('#' + id + '').addClass('show')
        }
    </script>
@endsection

@section('description', 'Распечатка и оформление будут осуществлены в максимально короткие сроки и с использованием лучших расходников.')
@section('keywords', 'копицентр 24 часа, копировальный центр Москва, копировальный центр круглосуточно, копировальный центр')
@section('title', 'Копицентр Москва, круглосуточный копировальный центр в Москве, Копифаст - 24 часа 7 дней в неделю')
