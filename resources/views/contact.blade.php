@extends('layout.layout')

@section('banner')
<img src="{{URL::asset('/images/contact.jpg')}}" />
@endsection

@section('banner-text')
Satysfakcja naszych klientów jest dla nas najważniejsza.
@endsection

@section('content')
@if(Session::has('success'))
    {{ Session::get('success') }}
@else
    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    Za pomocą poniższego formularza możesz wysłać nam wiadomość
    {!! Form::open(['route' => 'save']) !!}

    <div class="form-group">
        {!! Form::label('email', 'Adres e-mail') !!}
        {!! Form::text('email', null) !!}
    </div>
    <br>
    <div class="form-group">
        {!! Form::label('message', 'Treść wiadomości') !!}<br>
        {!! Form::textarea('message', null) !!}
    </div>

    {!! Form::submit('Wyślij') !!}

    {!! Form::close() !!}
@endif
@endsection
