<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TechHub</title>
    <link rel="stylesheet" href="{{ asset('/assets/styles/style.css') }}">

    <link rel="stylesheet" href="{{ asset('/assets/fontawesome/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/fontawesome/css/solid.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/fontawesome/css/regular.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/fontawesome/css/brands.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('/assets/fontawesome/webfonts/fa-regular-400.woff2') }}"> --}}
</head>

<body>
    <header>
        <nav>
            <a href="/"><img src="" alt="TechHub logo" class="nav-logo"></a>
            <ul>
                <li><a href="/jobs">Jobs</a></li>
                <li><a href="#">Resources</a></li>
                <li><a href="#">Community</a></li>
                <li><a href="#">Blog</a></li>
            </ul>
        </nav>
    </header>
    <div class="home-container">
        <div class="home-wrapper">
            <h1 class="header-cta-h1">Welcome to <span>TechHub</span></h1>
            <p class="header-cta-p">...the central hub for tech enthusiasts to connect, collaborate, and stay updated.
            </p>
            <div class="search-bar-div">
                <div class="input-div">
                    <i class="fa-solid fa-search"></i>
                    <input type="text" name="searchUser" placeholder="search for jobs, resources, communities..."
                        class="search-box" id="searchUser">
                </div>
                <button class="search-bar-button">Search</button>
                {{-- todo - use iframe to wrap li --}}
                <div id="dropdown-suggestions">
                    {{-- <ul>
                        <li> <a href="#"><i class="fa-solid fa-book"></i> Laravel Artisan Commands</a></li>
                        <li> <a href="#"><i class="fa-brands fa-black-tie"></i> Laravel Developer</a></li>
                        <li> <a href="#"><i class="fa-solid fa-people-group"></i> Laravel Kaduna</a></li>
                        <li> <a href="#"><i class="fa-brands fa-microblog"></i>  Laravel</a></li>
                    </ul> --}}
                </div>
            </div>

            {{-- todo - this should go into searchbar div --}}
            {{-- <div class="form-group">
                <input type="text" name="country_name" id="country_name" class="form-control input-lg"
                    placeholder="Enter Country Name" />
                <div id="countryList">
                </div>
            </div>
            {{ csrf_field() }} --}}

            <div class="home-cards-container">
                <div class="home-card">
                    <i class="fa-solid fa-search"></i>
                    <h3 class="card-header">Get Hired</h3>
                    <p class="card-description">Find cool Jobs that suit your needs...</p>
                </div>
                <div class="home-card">
                    <i class="fa-solid fa-users"></i>
                    <h3 class="card-header">Share Ideas</h3>
                    <p class="card-description">Network and build cool stuffs with like minded...</p>
                </div>
                <div class="home-card">
                    <i class="fa-solid fa-newspaper"></i>
                    <h3 class="card-header">Stay Updated</h3>
                    <p class="card-description">Follow the latest happenings in the industry...</p>
                </div>
            </div>
        </div>

        <div class="home-footer">
            <p>Visit my page: &nbsp;</p>
            <div class="social-icons">
                <a href="#" target="_blank" title="My Website"><i class="fa-solid fa-globe"></i></a>
                <a href="#" target="_blank" title="Github Account"><i class="fa-brands fa-github"></i></a>
            </div>
        </div>
    </div>

    {{-- JQuery Library --}}
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> --}}
    {{-- <script src={{ asset('/assets/scripts/jquery-3.7.1.min.js') }}></script>
    <script src={{ asset('/assets/scripts/jquery-3.7.1.js') }}></script> --}}
    {{-- searchbar auto complete --}}
    {{-- <script src={{ asset('/assets/scripts/searchbar_autocomplete.js') }}></script> --}}


    {{-- keep --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript">
    var path = "{{ route('welcome') }}";
    $( "#searchUser" ).autocomplete({
        source: function( request, response ) {
          $.ajax({
            url: path,
            type: 'GET',
            dataType: "json",
            data: {
               search: request.term
            },
            success: function(data) {
               response(data);Kf
            }
          });
        },
        select: function (event, ui) {
           $('#searchUser').val(ui.item.label);
           return false;
        }
      });
</script>

</body>

</html>
