@extends('layouts.main')

@section('content')

    <div class="text-center">

        <div class="container">
            <h1 class="pt-4">{{ $beer->title }}</h1>

            @if (!empty($beer->path_img))
                <img class="mb-3" width="400" src="{{asset('storage/' . $beer->path_img)}}" alt="{{$beer->title}}">
            @else
                <img class="mb-3" width="400" src="{{asset('img/no-img.png')}}" alt="{{$beer->title}}">
            @endif

            <p>Descrizione: {{ $beer->description}}</p>
            <p>Tipologia: {{ $beer->type}}</p>
            <p>Origine: {{ $beer->origin}}</p>
            <p>Prezzo: {{ $beer->price}}€</p>

        </div>
    </div>
@endsection
