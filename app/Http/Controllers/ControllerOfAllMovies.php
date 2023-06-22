<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ControllerOfAllMovies extends Controller
{
    public function index()
    {
        // testing the api with key
        // $testing = Http::get('https://api.themoviedb.org/3/movie/popular?api_key=7ef003ad6dfa43f0bb5b48cfb572065a')
        // ->json();
        // dd($testing);

        // testing using using token
        // $FetchingTopRatedMovies = Http::withToken(config('services.tmdb.token'))
        // ->get('https://api.themoviedb.org/3/movie/top_rated')
        // ->json()['results'];

        $FetchingTopRatedMovies = Http::get('https://api.themoviedb.org/3/movie/top_rated?api_key=7ef003ad6dfa43f0bb5b48cfb572065a')
        ->json()['results'];

        $FetchingPopularMovies = Http::get('https://api.themoviedb.org/3/movie/popular?api_key=7ef003ad6dfa43f0bb5b48cfb572065a')
        ->json()['results'];

        $ArrayOfGenres = Http::get('https://api.themoviedb.org/3/genre/movie/list?api_key=7ef003ad6dfa43f0bb5b48cfb572065a')
        ->json()['genres'];

        $genres = collect($ArrayOfGenres) -> mapWithKeys(function ($gener) {
            return [$gener['id'] => $gener['name']];
        });

        $randomNumber = random_int(10, 20);

        return view(
            'movies.index',
            [
            'FetchingPopularMovies' => $FetchingPopularMovies,
            'genres' => $genres,
            'FetchingTopRatedMovies' => $FetchingTopRatedMovies,
            'randomNumber' => $randomNumber,
            ]
        );
    }


    public function show($id)
    {

        $SingleMovieDetail = Http::get('https://api.themoviedb.org/3/movie/'.$id.'?api_key=7ef003ad6dfa43f0bb5b48cfb572065a&append_to_response=videos,images')
            ->json();
        // dd($SingleMovieDetail);

        return view('movies.show', [
            'movie' => $SingleMovieDetail,
        ]);
    }
}
