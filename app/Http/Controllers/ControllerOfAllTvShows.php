<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ControllerOfAllTvShows extends Controller
{
    public function index()
    {
        // testing the api with key
        // $testing = Http::get('https://api.themoviedb.org/3/tv/popular?api_key=7ef003ad6dfa43f0bb5b48cfb572065a')
        // ->json();
        // dd($testing);

        // testing using using token
        // $FetchingTopRatedMovies = Http::withToken(config('services.tmdb.token'))
        // ->get('https://api.themoviedb.org/3/tv/top_rated')
        // ->json()['results'];

        $FetchingTopRatedTvShows= Http::get('https://api.themoviedb.org/3/tv/top_rated?api_key=7ef003ad6dfa43f0bb5b48cfb572065a')
             ->json()['results'];

        $FetchingTvShows = Http::get('https://api.themoviedb.org/3/tv/popular?api_key=7ef003ad6dfa43f0bb5b48cfb572065a')
        ->json()['results'];

        $ArrayOfGenres = Http::get('https://api.themoviedb.org/3/genre/tv/list?api_key=7ef003ad6dfa43f0bb5b48cfb572065a')
        ->json()['genres'];

        $genres = collect($ArrayOfGenres) -> mapWithKeys(function ($gener) {
            return [$gener['id'] => $gener['name']];
        });


        return view(
            'TvShows.index',
            [
            'FetchingTvShows' => $FetchingTvShows,
            'genres' => $genres,
            'FetchingTopRatedTvShows' => $FetchingTopRatedTvShows,
             ]
        );
    }


    public function show($id)
    {
        $SingleTvShows = Http::get('https://api.themoviedb.org/3/tv/'.$id.'?api_key=7ef003ad6dfa43f0bb5b48cfb572065a&append_to_response=videos,images')
            ->json();
        // dd($SingleTvShows);
        return view('TvShows.show', [
            'SingleTvShows' => $SingleTvShows,
        ]);
    }
}
