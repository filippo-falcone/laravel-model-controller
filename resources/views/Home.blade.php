@extends('layouts.app')

@section('page-title')
    Homepage
@endsection

@section('main-content')
    <section class="movies">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4">
                @foreach ($movies as $movie)
                    <div class="col d-flex justify-content-center">
                        <div class="card" style="width: 20rem;">
                            <div class="card-body">
                                <h5 class="card-title">Titolo: {{$movie->title}}</h5>
                                <h6 class="card-title">Titolo Originale: {{$movie->original_title}}</h6>
                                <div class="card-text">Paese di Produzione: {{$movie->nationality}}</div>
                                <div class="card-text">Data d'uscita: {{$movie->date}}</div>
                                <div class="card-text">Voto: {{$movie->vote}}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>