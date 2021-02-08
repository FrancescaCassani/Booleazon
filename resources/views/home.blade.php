@extends('layouts.main')

@section('content')
    <div class="text-center mb-3" style="background-image: url('../img/back.jpg');">
       <img class="mt-5 mb-5 rounded-circle" src="{{ asset('img/logo.jpg') }}" alt="birra" width="220">
        <div class="container">
            <div class="hero row">
                @foreach ($beers as $beer)
                    <div class="col-sm mb-5">
                        <div>
                            <img class="mb-2 mt-2" width="300" height="430" src="{{ asset('storage/' . $beer->path_img) }}" alt="{{ $beer->title }}">
                            <h3 style="color:white; font-weight: bold" class="text-center mb-2">{{ $beer->title }}</h3>
                            <a class="text-decoration-none btn btn-warning" href="{{route('beers.show', $beer->slug)}}" role="button" style="color: white">Visualizza prodotto</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
