@extends('layouts.app')

@section('main-content')

<section class="movieCards mb-5">
  <div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      @foreach ($movies as $movie)
        <div class="col">
          <div class="card h-100 shadow-lg rounded-5">
            <img src="{{ $movie['cover'] }}" class="card-img-top shadow rounded-5" alt="{{ $movie['title']}}">
            <div class="card-body">
              <h4 class="card-title">{{ $movie['title']}}</h4>
              <p class="card-text mb-1">Data di uscita: {{ $movie['date']}}</p>
              <p class="card-text">Voto: {{ $movie['vote']}}</p>
            </div>
            <div class="card-footer text-center rounded-bottom-5">
              <small class="text-body-secondary">Titolo originale: {{ $movie['original_title']}}</small>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

@endsection