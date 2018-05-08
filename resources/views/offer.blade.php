@extends('layout.layout')

@section('banner')
<img src="{{URL::asset('/images/offer.png')}}" />
@endsection

@section('banner-text')
Tysiące zadowolonych klientów to nie przypadek.<br>
Przekonaj się i Ty!
@endsection

@section('content')
Naszą główną działalnością jest naprawa urządzeń komputerowych 
takich jak m.in. monitory, drukarki, skanery. Oferujemy również profesjonalne 
wsparcie techniczne w przypadku problemów. Zainstalujemy oprogramowanie, 
usuniemy złośliwe oprogramowanie, zaktualizujemy sterowniki, skonfigurujemy 
sieć domową złożoną z kilku routerów - w atrakcyjnych cenach!
@endsection