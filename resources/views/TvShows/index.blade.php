@extends('layouts.main')

@section('content')
    <div class="movilistcontainer">
        <div class="ListOfMovi">
            <h2 class="listTitle">List of TV shows</h2>
            <div class="listOfcards">
                @foreach ($FetchingTvShows as $tvshows)
                    <x-card-of-tv-shows :tvshows="$tvshows" :genres="$genres" />
                @endforeach
            </div>


            <h2 class="listTitle">Top Rated TV Shows</h2>
            <div class="listOfcards">
                @foreach ($FetchingTopRatedTvShows as $top_rated_tvshows)
                    <x-card-of-tv-shows :tvshows="$top_rated_tvshows" :genres="$genres" />
                @endforeach
            </div>
        </div>
    </div>
@endsection
