@extends('layouts.main')

@section('content')

>
    <h1 class="text-center pt-3 pb-3">Le nostre birre</h1>
    <ul class="container text-center">
        @foreach ($beers as $beer)
            <li class="list-unstyled list-group-item pt-5 pb-5">
                <div>
                    @if (!empty($beer->path_img))
                        <img class="mb-3" width="250" src="{{asset('storage/' . $beer->path_img)}}" alt="{{$beer->title}}">
                    @else
                        <img class="mb-3" width="250" src="{{asset('img/no-img.png')}}" alt="{{$beer->title}}">
                    @endif
                </div>
                <div>
                    <h5>Name: {{$beer->title}}</h5>
                    <p>Description: {{$beer->description}}</p>
                    <p>Price: {{$beer->price}}€</p>
                    <p>Origin: {{$beer->origin}}</p>
                    <p>Added: {{$beer->created_at->diffForHumans()}}</p>
                </div>

               {{-- Rotta per lo show --}}
                <div class="d-flex justify-content-center">
                    <div class="form-group mr-2 ml-3">
                        <a class="text-decoration-none btn btn-primary" href="{{route('beers.show', $beer->slug)}}" role="button">Show details</a>
                    </div>

                    <div class="form-group mr-2">
                        <a class="btn btn-warning" href="{{route('beers.edit', $beer->slug)}}">Edit</a>
                    </div>

                    <form  action="{{route('beers.destroy', $beer->id)}}" method="POST">
                    @csrf
                    @method("DELETE")

                        <input class="btn btn-danger" type="submit" value="Delete" >
                    </form>
                </div>
            </li>
        @endforeach
    </ul>

</div>
@endsection
