<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechHub</title>

    <link rel="stylesheet" href="{{ asset('/assets/fontawesome/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/fontawesome/css/solid.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/fontawesome/css/regular.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/fontawesome/css/brands.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('/assets/fontawesome/webfonts/fa-regular-400.woff2') }}"> --}}
    {{-- bootstrap cdn --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}
    {{-- custom css --}}
    <link rel="stylesheet" href="{{ asset('/assets/styles/style.css') }}">
</head>

<body>
    {{-- todo - set offcanvass for mobile nave --}}
    <nav class="navbar navbar-expand-lg sticky-top shadow" style="background: linear-gradient(135deg, #0598ce, #113768, #001a33)">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('/assets/img/bootstrap-logo.svg') }}" alt="Logo" width="30" height="24"
                    class="d-inline-block align-text-center">
                TechHub
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/jobs">Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Resoures</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Community</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- <main> --}}

    @yield('content')

    {{-- </main> --}}

    <footer>

    </footer>

    {{-- bootstrap cdn --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script> --}}
    {{-- bootstrap local --}}
    <link rel="stylesheet" href="{{ asset('/assets/bootstrap/js/bootstrap.js') }}">
</body>

</html>
