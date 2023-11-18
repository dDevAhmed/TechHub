@extends('layout')

@section('content')
    <div class="p-5 h-full w-full">
        <div class="w-3/5 m-auto mt-16 text-center">
            <h1 class="text-blue-700 font-bold text-4xl">Welcome to <span>TechHub</span></h1>
            <p class="text-md text-gray-600 mt-3">...the central hub for tech enthusiasts to connect, share, and stay
                updated.</p>

            <div class="border border--gray-500 shadow-lg flex items-center mt-12 p-0">
                <i class="fa-solid fa-search p-3 text-gray-700"></i>
                <input type="text" name="searchInput" id="searchInput" class="p-2 flex-grow outline-none"
                    placeholder="search for jobs, resources, communities and more..." onfocus="this.val='' " autofocus>
                <button id="searchButton"
                    class="bg-gray-100 font-semibold px-5 py-2 hover:bg-blue-700 hover:text-white m-0">Search</button>
            </div>

            <div id="search_list"></div>

            {{-- cards --}}
            <div class="flex gap-4 justify-between mt-10">
                <div class="shadow-md p-5 item-center flex-1">
                    <i class="fa-solid fa-suitcase"></i>
                    <h3 class="font-semibold mt-3 text-blue-700">Get Hired</h3>
                    <p class="text-gray-700">Find cool jobs with innovative companies.</p>
                </div>
                <div class="shadow-md p-5 items-center flex-1">
                    <i class="fa-solid fa-users"></i>
                    <h3 class="font-semibold mt-3 text-blue-700">Share Ideas</h3>
                    <p class="text-gray-700">Network and build cool tech projects.</p>
                </div>
                <div class="shadow-md p-5 items-center flex-1">
                    <i class="fa-solid fa-newspaper"></i>
                    <h3 class=" font-semibold mt-3 text-blue-700">Stay Updated</h3>
                    <p class="text-gray-700">Stay ahead of the curve with real-time updates.</p>
                </div>
            </div>
        </div>
    </div>


    {{-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script> --}}
    {{-- <script>
        $(document).ready(function() {
            $('#search').on('keyup', function() {
                var query = $(this).val();

                    $.ajax({
                        url: '/search',
                        type: 'GET',
                        data: {
                            'search': query
                        },
                        success: function(data) {
                            $('search_list').html(data);
                        }
                    });

                // fetchSearchResults(query);
            });

            // $('#searchButton').on('click', function() {
            //     const query = $('#searchInput').val();
            //     fetchSearchResults(query);
            // });

            // function fetchSearchResults(query) {
            //     if (query.length > 2) {
            //         $.ajax({
            //             url: '/search',
            //             type: 'GET',
            //             data: {
            //                 query: query
            //             },
            //             success: function(data) {
            //                 displayResults(data);
            //             }
            //         });
            //     } else {
            //         $('#searchResults').empty();
            //     }
            // }

            // function displayResults(results) {
            //     const list = $('#searchResults');
            //     list.empty();

            //     if (results.length > 0) {
            //         results.forEach(function(result) {
            //             list.append('<li>' + result.title + '</li>');
            //         });
            //     } else {
            //         list.append('<li>No results found</li>');
            //     }
            // }
        });
    </script> --}}
@endsection
