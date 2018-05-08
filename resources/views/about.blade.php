@extends('layout.layout')

@section('banner')
<img src="{{URL::asset('/images/about.jpg')}}" />
@endsection

@section('banner-text')
Prowadzimy usługę pomocy telefonicznej!<br>
Zadzwoń do naszych specjalistów:
<h1>555 666 777</h1>
@endsection

@section('content')
Skorzystanie z usług firmy CTRL ALT DEL 
to gwarancja otrzymania usług na najwyższym poziomie. 
Nasza główna działalność, czyli serwisowanie urządzeń, 
pozwoliła nam zdobyć zaufanie tysięcy klientów i wyrobić 
sobie uznanie w branży. Oferujemy również usługi związane 
z instalacją oprogramowania oraz konfiguracją domowych sieci 
internetowych. Kilka miesięcy temu poszerzyliśmy naszą działalność 
o sklep z akcesoriami komputerowymi. Dołącz do grona zadowolonych 
klientów!
@endsection