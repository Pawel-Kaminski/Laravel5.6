<!DOCTYPE html>
<html>
    <head>
        <title>CTRL ALT DEL - serwis komputerowy</title>
        {{ Html::style('css/style.css') }}
    </head>
    <body>
        <div id="header">
            <img id="logo" src="{{URL::asset('/images/logo.png')}}" />
            <div id="headline">Profesjonalny serwis komputerowy</div>
        </div>
        <div id="menu">
            <a href="{{URL::to('about')}}">O nas</a>
            <a href="{{URL::to('offer')}}">Oferta</a>
            <a href="{{URL::to('pricing')}}">Cennik</a>
            <a href="{{URL::to('shop')}}">Sklep</a>
            <a href="{{URL::to('sale')}}">Promocje</a>
            <a href="{{URL::to('contact')}}">Kontakt</a>
        </div>
        <div id="banner">
            @yield('banner')
            <div id="banner-text">
                @yield('banner-text')
            </div>
        </div>
        <div id="content">
            @yield('content')
        </div>
    </body>
</html>