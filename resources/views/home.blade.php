@extends('layout')

@section('content')
    <div class="p-5 h-full w-full">
        <div class="w-3/5 m-auto mt-16 text-center">
            <h1 class="text-blue-700 font-bold text-4xl">Welcome to <span>TechHub</span></h1>
            <p class="text-md text-gray-600 mt-3">...the central hub for tech enthusiasts to connect, share, and stay
                updated.</p>

            <div class="border border--gray-500 shadow-lg flex items-center mt-12 p-0">
                <i class="fa-solid fa-search p-3 bg-white"></i>
                <input type="text" name="" id="searchInput" class="p-2 flex-grow outline-none"
                    placeholder="search for jobs, books, communities and more..." autofocus>
                <button id="searchButton"
                    class="bg-gray-100 font-semibold px-5 py-2 hover:bg-blue-700 hover:text-white m-0">Search</button>
            </div>

            <ul id="searchResults"></ul>

            {{-- cards --}}
            <div class="flex gap-4 justify-between mt-10">
                <div class="shadow-md p-5 item-center">
                    <i class="fa-solid fa-search text-blue-700"></i>
                    <h3 class="font-semibold mt-3">Get Hired</h3>
                    <p class="">Find cool Jobs that suit your needs...</p>
                </div>
                <div class="shadow-md p-5 items-center ">
                    <i class="fa-solid fa-users text-blue-700"></i>
                    <h3 class="font-semibold mt-3">Share Ideas</h3>
                    <p class="">Network and build cool stuffs with like minded...</p>
                </div>
                <div class="shadow-md p-5 items-center ">
                    <i class="fa-solid fa-newspaper text-blue-700"></i>
                    <h3 class=" font-semibold mt-3">Stay Updated</h3>
                    <p class="">Follow the latest happenings in the industry...</p>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#searchInput').on('input', function() {
                const query = $(this).val();
                fetchSearchResults(query);
            });

            $('#searchButton').on('click', function() {
                const query = $('#searchInput').val();
                fetchSearchResults(query);
            });

            function fetchSearchResults(query) {
                if (query.length > 2) {
                    $.ajax({
                        url: '/search',
                        type: 'GET',
                        data: {
                            query: query
                        },
                        success: function(data) {
                            displayResults(data);
                        }
                    });
                } else {
                    $('#searchResults').empty();
                }
            }

            function displayResults(results) {
                const list = $('#searchResults');
                list.empty();

                if (results.length > 0) {
                    results.forEach(function(result) {
                        list.append('<li>' + result.title + '</li>');
                    });
                } else {
                    list.append('<li>No results found</li>');
                }
            }
        });
    </script>
@endsection
