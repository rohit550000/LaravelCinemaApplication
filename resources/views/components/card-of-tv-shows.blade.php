<a href="{{ route('TvShows.show', $tvshows['id']) }}">
    <div class="card">
        <img class="cardsimg" src="https://image.tmdb.org/t/p/original{{ $tvshows['poster_path'] }}" />
        <div class="cardsDetails">
            <div class="cardTitle">{{ $tvshows['name'] }}</div>
            <div class="cardRuntime">
                {{ $tvshows['first_air_date'] }}
                <span class="cardRating">{{ $tvshows['vote_average'] }}<i class="fas fa-star"></i></span><br>
                <span>
                    @foreach ($tvshows['genre_ids'] as $genre)
                        {{ $genres->get($genre) }}
                    @endforeach
                </span>
            </div>
            <div class="cardDescription">{{ substr($tvshows['overview'], 0, 118) . '...' }}</div>
        </div>
    </div>
</a>
