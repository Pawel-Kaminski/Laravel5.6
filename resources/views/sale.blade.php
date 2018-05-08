@extends('layout.layout')

@section('banner')
<img src="{{URL::asset('/images/sale.jpg')}}" />
@endsection

@section('banner-text')
Promocje, dzięki którym zapłacisz jeszcze mniej niż zwykle!
@endsection

@section('content')
Aktualnie trwające promocje:
<ul>
    <li>Pakiet 10 godzin pomocy serwisowej za jedyne 299 zł! 
        Pytaj w jednym z punktów o więcej informacji.</li>
    <li>Zniżka 5% dla studentów na nasze usługi oraz produkty ze sklepu! 
        (należy okazać ważną legitymację studencką)</li>
    <li>Do każdego zakupu w naszym sklepie powyżej 2000 zł dodajemy dwie 
        wybrane gry na dowolną platformę!</li>
</ul>
@endsection