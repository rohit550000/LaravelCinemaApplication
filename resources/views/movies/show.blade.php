@extends('layouts.main')

@section('content')
    <div class="movieContainer">
        <div class="BackImageContainer">
            <img class="BackImage" src="https://image.tmdb.org/t/p/original{{ $movie['backdrop_path'] }}" />
        </div>
        <div class="moviDetail">
            <div class="movieLeft">
                <img class="insideImg" src="https://image.tmdb.org/t/p/original{{ $movie['poster_path'] }}" />
            </div>
            <div class="rightDetail">
                <div class="movie__detailRightTop">
                    <div class="mName">{{ $movie['original_title'] }}</div>
                    <div class="mtagline">{{ $movie['tagline'] }}</div>
                    <div class="mrating">
                        {{ $movie['vote_average'] }} <i class="fas fa-star"></i>
                        <span class="voteCount">{{ $movie['vote_count'] }}</span>
                    </div>
                    <div class="mRuntime">{{ $movie['runtime'] . ' Min' }}</div>
                    <div class="mReleaseDate">{{ $movie['release_date'] }}</div>
                    <div class="mgenresContent">
                        @foreach ($movie['genres'] as $genre)
                            <span class="mGenre"> {{ $genre['name'] }}</span>
                        @endforeach
                    </div>
                </div>
                <!-- if  dont have any video than dont show the play button-->
                @if (count($movie['videos']['results']) > 0)
                    <div class="playvideo">
                        <a href="https://www.youtube.com/watch?v={{ $movie['videos']['results'][0]['key'] }}">
                            <button>
                                Play video
                            </button>
                        </a>
                    </div>
                @endif
                <div class="synopsisDetail">
                    <div class="synopText">SYNOPSIS</div>
                    <div class="sysDescrip">{{ $movie['overview'] }}</div>
                </div>
            </div>
        </div>
    </div>



    <div class="relatedimages">
        <h1>Related Images</h1>
        <div class="relatedImgContainer">
            @foreach ($movie['images']['backdrops'] as $image)
                @if ($loop->index < 6)
                    <div class="imgContainer">
                        <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $image['file_path'] }}">
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection
