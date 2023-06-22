<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerOfAllMovies;
use App\Http\Controllers\ControllerOfAllTvShows;


Route::get('/', [ControllerOfAllMovies::class,'index'])->name('movies.index');

Route::get('/movies/{id}', [ControllerOfAllMovies::class,'show'])->name('movies.show');


Route::get('/TvShows', [ControllerOfAllTvShows::class,'index'])->name('TvShows.index');

Route::get('/TvShows/{id}', [ControllerOfAllTvShows::class,'show'])->name('TvShows.show');
