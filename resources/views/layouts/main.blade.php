<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cenema App</title>
    <link rel="stylesheet" href="/css/showMovi.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/MoviCardsAll.css">
</head>
<body>

    <div class="header">
        <div class="logoContainer">
            <a href="{{ route('movies.index') }}" class="logo">
                <span>Developer</span>
                <img src="./images/logo.png" alt="" />
            </a>
        </div>

        <div class="links">
            <a href="{{ route('movies.index') }}"><span>Movies</span></a>
            <a href="{{ route('TvShows.index') }}"><span>TV shows</span></a>
        </div>
    </div>

    @yield('content')

</body>
</html>
