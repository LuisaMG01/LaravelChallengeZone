<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <title>@yield('title', 'Online Store')</title>
</head>
<body>
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
        <div class="container">
        
            <a class="navbar-brand" href="{{ route('home.index') }}">GAMER ZONE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" href="#">Home</a>
                    <a class="nav-link active" href="#">About</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- header -->

    <!-- header -->
    <header class="masthead bg-dark text-white d-flex justify-content-center align-items-center py-4">
        <div class="container text-center">
            <h3 class="mb-0">CHALLENGE YOURSELF</h3>
        </div>
    </header>
    <!-- header -->

    <div class="container my-4">
        @yield('content')
    </div>

    <!-- footer -->
    <footer class="footer py-4 text-center text-white bg-dark">
        <div class="container">
            <small>
                &copy; 2024 GamingWorld. All rights reserved. | 
                Follow us: 
                <a class="text-reset fw-bold text-decoration-none" target="_blank" href="https://twitter.com/GamingWorld">
                    Twitter
                </a> | 
                <a class="text-reset fw-bold text-decoration-none" target="_blank" href="https://www.instagram.com/gamingworld/">
                    Instagram
                </a> | 
                <a class="text-reset fw-bold text-decoration-none" target="_blank" href="https://www.facebook.com/GamingWorld">
                    Facebook
                </a>
            </small>
        </div>
    </footer>
    <!-- footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
