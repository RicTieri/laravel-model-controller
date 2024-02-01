@extends('layouts.app')

@section('main-content')
<h1>Movie Card</h1>

<section class="movieCards">
  <div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      @foreach ($movies as $movie)
        <div class="col">
          <div class="card h-100">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $movie['title']}}</h5>
              <p class="card-text">Data di uscita: {{ $movie['date']}}</p>
              <p class="card-text">Voto: {{ $movie['vote']}}</p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">Titolo originale: {{ $movie['original_title']}}</small>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

@endsection