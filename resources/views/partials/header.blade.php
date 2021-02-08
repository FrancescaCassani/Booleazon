<header class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark"> {{-- style="background-image: url('img/_K4A7222.jpg')"> --}}
        <a class="nav-link" style="color:#e49f1e" href="{{route('homepage')}}">
            <img class="rounded mr-4" src="{{asset('img/logo.jpg')}}" width=50>
            <span style="font-weight:bold" style="color:#e49f1e">Artisan Beer Shop</span>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto" style="font-weight:bold">
            <li class="nav-item active">
                {{-- Rotta Home --}}
              <a class="nav-link" href="{{route('homepage')}}" style="color:#e49f1e">Home</a>
            </li>
            <li class="nav-item active">
                {{-- Rotta About --}}
              <a class="nav-link" href="{{route('about')}}" style="color:#e49f1e">About</a>
            </li>

          <li class="nav-item active">
            {{-- Rotta About --}}
          <a class="nav-link" href="{{route('beers.create')}}" style="color:#e49f1e">Area riservata</a>
        </li>
</header>
