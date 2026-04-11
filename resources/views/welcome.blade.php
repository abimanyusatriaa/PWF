<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif

        <style>
            * { margin: 0; padding: 0; box-sizing: border-box; }
            body {
                background-color: #0a0a0a;
                color: #ededec;
                font-family: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif;
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 2rem;
            }
            .card {
                background-color: #161615;
                border: 1px solid #2a2a27;
                border-radius: 12px;
                padding: 3rem 3rem;
                width: 100%;
                max-width: 1100px;
                min-height: 300px;
                display: flex;
                align-items: center;
            }
            .card-content {
                display: flex;
                flex-direction: column;
                gap: 0.4rem;
            }
            .name {
                font-size: 1rem;
                font-weight: 600;
                color: #ededec;
            }
            .nim {
                font-size: 0.9rem;
                color: #6b6b68;
                margin-bottom: 0.6rem;
            }
            .btn {
                display: inline-block;
                background-color: #f0efea;
                color: #1b1b18;
                border: none;
                border-radius: 10px;
                padding: 0.55rem 1.2rem;
                font-size: 0.9rem;
                font-weight: 500;
                cursor: pointer;
                text-decoration: none;
                width: fit-content;
            }
            .btn:hover {
                background-color: #ffffff;
            }
        </style>
        <style>
            .auth-nav {
                position: absolute;
                top: 2rem;
                right: 2rem;
                display: flex;
                gap: 1.5rem;
            }
            .auth-nav a {
                color: #ededec;
                text-decoration: none;
                font-weight: 500;
                font-size: 1rem;
                transition: color 0.2s;
            }
            .auth-nav a:hover {
                color: #ffffff;
            }
        </style>
    </head>
    <body class="antialiased">
        @if (Route::has('login'))
            <div class="auth-nav">
                @auth
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                @else
                    <a href="{{ route('login') }}">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="card">
            <div class="card-content">
                <div class="name">Abimanyu Satria</div>
                <div class="nim">20230140160</div>
                <a href="#" class="btn">Modul Pertemuan 1</a>
            </div>
        </div>
    </body>
</html>