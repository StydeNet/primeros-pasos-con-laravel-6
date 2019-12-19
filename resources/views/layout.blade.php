<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'App de notas')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="wrap">
        <header class="head">
            <a href="#" class="logo"></a>

            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li class="main-nav-item active">
                        <a href="/static/notes.html" class="main-nav-link">
                            <i class="icon icon-th-list"></i>
                            <span>Ver notas</span>
                        </a>
                    </li>
                    <li class="main-nav-item">
                        <a href="/static/add-note.html" class="main-nav-link">
                            <i class="icon icon-pen"></i>
                            <span>Nueva nota</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>

        @yield('content')

        <footer class="foot">
            <div class="ad">
                <p>
                    Esta app es desarrollada en el curso
                    <a href="https://styde.net/laravel-6">Primeros pasos con Laravel 6</a>.
                </p>
            </div>
            <div class="license">
                <p>© 2019 Derechos Reservados - Styde Limited</p>
            </div>
        </footer>
    </div>
</body>
</html>
