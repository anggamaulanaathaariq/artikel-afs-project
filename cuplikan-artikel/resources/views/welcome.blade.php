<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
        <style>
            body {
                font-family: 'Arial', sans-serif;
                background-color: #f7fafc;
                color: #2d3748;
            }

            .container {
                max-width: 1200px;
                margin: 0 auto;
            }

            header {
                background-color: #4299e1;
                color: #ffffff;
                padding: 1rem;
                text-align: center;
            }

            nav {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 1rem 0;
                background-color: #ffffff;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }

            nav a {
                color: #2d3748;
                text-decoration: none;
                padding: 1rem;
                transition: color 0.3s;
            }

            nav a:hover {
                color: #4299e1;
            }

            main {
                padding: 2rem 0;
            }

            .card {
                background-color: #ffffff;
                border: 1px solid #e2e8f0;
                border-radius: 0.375rem;
                padding: 1.5rem;
                margin-bottom: 1.5rem;
                transition: transform 0.3s;
            }

            .card:hover {
                transform: translateY(-5px);
            }

            .card h2 {
                color: #4299e1;
                font-size: 1.5rem;
                margin-bottom: 1rem;
            }

            .card p {
                color: #4a5568;
            }

            footer {
                text-align: center;
                padding: 1rem 0;
                background-color: #4299e1;
                color: #ffffff;
            }
        </style>
    </head>

    <body>
        <header>
            <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg"
                class="h-16 w-auto text-gray-700 sm:h-20 mx-auto">
                <!-- Your SVG content -->
            </svg>
        </header>

        <nav>
            @if (Route::has('login'))
            <div>
                @auth
                <a href="{{ url('/home') }}">Home</a>
                @else
                <a href="{{ route('login') }}">Log in</a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4">Register</a>
                @endif
                @endauth
            </div>
            @endif
        </nav>

        <main class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="card">
                    <h2><a href="https://laravel.com/docs" class="underline">Documentation</a></h2>
                    <p>Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.</p>
                </div>

                <div class="card">
                    <h2><a href="https://laracasts.com" class="underline">Laracasts</a></h2>
                    <p>Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.</p>
                </div>

                <div class="card">
                    <h2><a href="https://laravel-news.com/" class="underline">Laravel News</a></h2>
                    <p>Laravel News is a community-driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.</p>
                </div>
            </div>
        </main>

        <footer>
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </footer>
    </body>
</html>
