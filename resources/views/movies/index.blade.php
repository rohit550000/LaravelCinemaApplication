@extends('layouts.main')

@section('content')
    <div class="PosterContent">
        <div class="posterimage">
            @foreach ($FetchingPopularMovies as $movie)
                @if ($loop->index == $randomNumber)
                    <a href="{{ route('movies.show', $movie['id']) }}">
                        <img src="https://image.tmdb.org/t/p/original{{ $movie['poster_path'] }}" />
                    </a>
        </div>
        <div class="opacity-toplayer"></div>
        <div class="opacity-bottomlayer"></div>


        <div class="posterImgDetail">
            <div class="posterImg__title">
                <h1>{{ $movie['original_title'] }}</h1>
            </div>

            <div class="posterImage__description">
                {{ $movie['overview'] }}</div>
            @endif
            @endforeach
        </div>
    </div>
    


    <div class="movilistcontainer">
        <div class="ListOfMovi">
            <h2 class="listTitle">List of movies</h2>
            <div class="listOfcards">
                @foreach ($FetchingPopularMovies as $movie)
                    <x-card-of-movies :movie="$movie" :genres="$genres" />
                @endforeach
            </div>

            <h2 class="listTitle">Top Rated movies</h2>
            <div class="listOfcards">
                @foreach ($FetchingTopRatedMovies as $TopRatedmovie)
                    <x-card-of-movies :movie="$TopRatedmovie" :genres="$genres" />
                @endforeach
            </div>
        </div>
    </div>
@endsection
