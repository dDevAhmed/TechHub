@extends('layout')

@section('content')
    <div class="p-5 h-full w-full ">
        <div class="w-3/5 m-auto mt-16 text-center">
            <h1 class="text-blue-700 font-bold text-4xl">Welcome to <span>TechHub</span></h1>
            <p class="text-md text-gray-600 mt-3 dark:text-gray-400">...the central hub for tech enthusiasts to connect, share, and stay
                updated.</p>

            <div class="border shadow-lg dark:bg-gray-800 flex items-center mt-12 p-0">
                <i class="fa-solid fa-search p-3 text-gray-700 dark:text-gray-300"></i>
                <input type="text" name="searchInput" id="searchInput" class="p-2 flex-grow outline-none dark:bg-gray-800 dark:text-gray-400"
                    placeholder="search for jobs, resources, communities and more..." onfocus="this.value=''" autofocus>
                <button id="homeSearchButton"
                    class="bg-gray-100 dark:bg-gray-700 font-semibold px-5 py-2 hover:bg-blue-700 dark:hover:bg-blue-700 dark:text-gray-300 hover:text-white dark:hover:text-white m-0">Search</button>
                <div id="searchSuggestions" class="absolute z-50 bg-white border border--gray-200 p-2 hidden">
                    <ul id="suggestionList" class="list-none"></ul>
                </div>
            </div>

            {{-- cards --}}
            <div class="flex gap-4 justify-between mt-10">
                <div class="shadow-md dark:bg-gray-900 p-5 item-center flex-1">
                    <i class="fa-solid fa-suitcase dark:text-gray-300"></i>
                    <h3 class="font-semibold mt-3 text-blue-700">Get Hired</h3>
                    <p class="text-gray-700 dark:text-gray-300">Find cool jobs with innovative companies.</p>
                </div>
                <div class="shadow-md dark:bg-gray-900 p-5 items-center flex-1">
                    <i class="fa-solid fa-users dark:text-gray-300"></i>
                    <h3 class="font-semibold mt-3 text-blue-700">Share Ideas</h3>
                    <p class="text-gray-700 dark:text-gray-300">Network and build cool tech projects.</p>
                </div>
                <div class="shadow-md dark:bg-gray-900 p-5 items-center flex-1">
                    <i class="fa-solid fa-newspaper dark:text-gray-300"></i>
                    <h3 class=" font-semibold mt-3 text-blue-700">Stay Updated</h3>
                    <p class="text-gray-700 dark:text-gray-300">Stay ahead of the curve with real-time updates.</p>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            var $searchInput = $('#searchInput');
            var $suggestionList = $('#suggestionList');
            var suggestions = [];

            $searchInput.on('keyup', function() {
                var searchQuery = $(this).val().toLowerCase();

                if (searchQuery === '') {
                    $suggestionList.addClass('hidden');
                    return;
                }

                // Fetch suggestions from database using AJAX
                $.ajax({
                    url: '/',
                    method: 'GET',
                    data: {
                        query: searchQuery
                    },
                    success: function(response) {
                        suggestions = response.suggestions;
                        updateSuggestionsList();
                    }
                });

            });

            $('#searchButton').on('click', function() {
                var searchQuery = $searchInput.val();

                if (searchQuery !== '') {
                    // Redirect to results page with the search query
                    window.location.href = '/search?query=' + searchQuery;
                }
            });

            function updateSuggestionsList() {
                $suggestionList.empty();

                for (var i = 0; i < suggestions.length; i++) {
                    var suggestion = suggestions[i];
                    var suggestionItem = $('<li class="text-gray-700 cursor-pointer py-2">' + suggestion + '</li>');
                    suggestionItem.on('click', function() {
                        $searchInput.val(suggestion);
                        $suggestionList.addClass('hidden');

                        // Perform actual search based on the selected suggestion
                        // ...
                    });

                    $suggestionList.append(suggestionItem);
                }

                if (suggestions.length > 0) {
                    $suggestionList.removeClass('hidden');
                }
            }
        });
    </script>
@endsection
