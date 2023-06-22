<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardOfTvShows extends Component
{
    public $tvshows;
    public $genres;

    public function __construct($tvshows, $genres)
    {
        $this->tvshows = $tvshows;
        $this->genres = $genres;

    }

    public function render(): View|Closure|string
    {
        return view('components.card-of-tv-shows');
    }
}
