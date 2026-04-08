    <!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>My Portfolio</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    
        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <!-- <div class="loader">
            <h1 class="loader-text">LANZ</h1>
        </div> -->
        <div id="app">
            <nav class="navbar navbar-expand-md" id="portfolio-nav">
                <div class="container">
                    <a class="navbar-brand nav-link" href="#home">LNAZ</a>
                    <!-- Burger button -->
                    <button class="navbar-toggler" type="button" 
                            data-bs-toggle="collapse" 
                            data-bs-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" 
                            aria-expanded="false" 
                            aria-label="Toggle navigation">
                        <span class="burger-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#experience">Experience</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#projects">Projects</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <main class="py-4">
                @yield('content')
            </main>
        </div>

        
    </body>
    </html>
