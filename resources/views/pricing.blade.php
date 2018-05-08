@extends('layout.layout')

@section('banner')
<img src="{{URL::asset('/images/pricing.jpg')}}" />
@endsection

@section('banner-text')
Usługi wysokiej jakości na każdą kieszeń.
@endsection

@section('content')
Ceny usług mogą podlegać negocjacji. W przypadku regularnego 
korzystania z usług zachęcamy do kontaktu i ustalenia specjalnie 
przygotowanej oferty indywidualnej.

<table id="pricing">
    <tr>
        <th>Usługa</th>
        <th>Cena</th>
    </tr>
    <tr>
        <td>naprawa urządzenia</td>
        <td>do uzgodnienia</td>
    </tr>
    <tr>
        <td>instalacja systemu operacyjnego</td>
        <td>100 zł</td>
    </tr>
    <tr>
        <td>konfiguracja sieci domowej</td>
        <td>50 zł/h</td>
    </tr>
    <tr>
        <td>wsparcie telefoniczne<br>
            tel. 555 666 777
        </td>
        <td>3,69 zł/min. z VAT</td>
    </tr>
    <tr>
        <td>usuwanie złośliwego oprogramowania</td>
        <td>50 zł/h</td>
    </tr>
    <tr>
        <td>wsparcie techniczne w domu klienta</td>
        <td>50 zł/h</td>
    </tr>
</table>
@endsection