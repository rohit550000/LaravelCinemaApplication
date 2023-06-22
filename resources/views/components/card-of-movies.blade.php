<a href="{{ route('movies.show', $movie['id']) }}">
    <div class="card">
        <img class="cardsimg" src="https://image.tmdb.org/t/p/original{{ $movie['poster_path'] }}" />
        <div class="cardsDetails">
            <div class="cardTitle">{{ $movie['original_title'] }}</div>
            <div class="cardRuntime">
                {{ $movie['release_date'] }}
                <span class="cardRating">{{ $movie['vote_average'] }}<i class="fas fa-star"></i></span><br>
                <span>
                    @foreach ($movie['genre_ids'] as $genre)
                        {{ $genres->get($genre) }}
                    @endforeach
                </span>
            </div>
            <div class="cardDescription">{{ substr($movie['overview'], 0, 118) . '...' }}</div>
        </div>
    </div>
</a>
