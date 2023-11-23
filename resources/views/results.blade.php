@extends('layout')

@section('content')
    <div class="py-10 h-full w-4/5 m-auto flex gap-4">
        <div class="w-1/5">
            <aside class="sticky top-28"> {{-- fixme - top --}}
                <div class="shadow-md p-5">
                    <h3 class="font-bold">Popular Tags</h5>
                        <div class="flex flex-wrap gap-2 mt-5">
                            <a href="/results?tag=vol"
                                class="font-semibold bg-blue-50 text-blue-700 py-1 px-2 text-xs rounded">Frontend</a>
                            <a href="/results?tag=tag"
                                class="font-semibold bg-blue-50 text-blue-700 py-1 px-2 text-xs rounded">Backend</a>
                            <a href="/results?tag=tag"
                                class="font-semibold bg-blue-50 text-blue-700 py-1 px-2 text-xs rounded">PHP</a>
                            <a href="/results?tag=tag"
                                class="font-semibold bg-blue-50 text-blue-700 py-1 px-2 text-xs rounded">ReactJs</a>
                            <a href="/results?tag=tag"
                                class="font-semibold bg-blue-50 text-blue-700 py-1 px-2 text-xs rounded">Azure</a>
                            <a href="/results?tag=tag"
                                class="font-semibold bg-blue-50 text-blue-700 py-1 px-2 text-xs rounded">VueJs</a>
                            <a href="/results?tag=tag"
                                class="font-semibold bg-blue-50 text-blue-700 py-1 px-2 text-xs rounded">Junior</a>
                            <a href="/results?tag=tag"
                                class="font-semibold bg-blue-50 text-blue-700 py-1 px-2 text-xs rounded">Fullstack</a>
                            <a href="/results?tag=tag"
                                class="font-semibold bg-blue-50 text-blue-700 py-1 px-2 text-xs rounded">API</a>
                            <a href="/results?tag=tag"
                                class="font-semibold bg-blue-50 text-blue-700 py-1 px-2 text-xs rounded">Laravel</a>
                        </div>
                        <div id="searchSuggestions" class="absolute z-50 bg-white border border--gray-200 p-2 hidden">
                            <ul id="suggestionList" class="list-none"></ul>
                        </div>
                </div>
            </aside>
        </div>
        <div class="w-3/4" id="center_container">
            <main class="shadow-md">
                <div class="bg-white pb-3 sticky top-20">
                    <div class="flex">
                        <button id="job_tab_button" class="tablinks inline-block p-4 border-e border-e-gray-300  w-full"
                            data-tab="jobs">
                            Jobs
                            <span
                                class="inline-flex items-center justify-center w-5 h-5 ms-2 text-xs font-semibold text-white bg-gray-700 rounded-full">
                                {{ $searchResults['counts']['job_listings'] }}
                            </span>
                        </button>
                        <button class="tablinks inline-block p-4 border-e border-e-gray-300 w-full bg-gray-100"
                            data-tab="resources">
                            Resources
                            <span
                                class="inline-flex items-center justify-center w-4 h-4 ms-2 text-xs font-semibold text-white bg-gray-700 rounded-full">
                                {{ $searchResults['counts']['resources'] }}
                            </span>
                        </button>
                        <button class="tablinks inline-block p-4 border-e border-e-gray-300 w-full bg-gray-100"
                            data-tab="communities">
                            Communities
                            <span
                                class="inline-flex items-center justify-center w-4 h-4 ms-2 text-xs font-semibold text-white bg-gray-700 rounded-full">
                                {{ $searchResults['counts']['communities'] }}
                            </span>
                        </button>
                        <button class="tablinks inline-block p-4 w-full bg-gray-100" data-tab="blogs">
                            Blogs
                            <span
                                class="inline-flex items-center justify-center w-4 h-4 ms-2 text-xs font-semibold text-white bg-gray-700 rounded-full">
                                {{ $searchResults['counts']['blogs'] }}
                            </span>
                        </button>
                    </div>
                </div>
                <div id="tab-contents">
                    <div class="tabcontent p-4" id="jobs">
                        @if ($searchResults['job_listings']->count() > 0)
                            @foreach ($searchResults['job_listings'] as $searchResult)
                                <div class="bg-gray-50 mb-3 p-3 hover:bg-blue-50 flex items-center">
                                    <div class=" w-1/6 h-auto justify-center">
                                        <img src="{{ asset('/assets/img/logo_glyph_no_bg.png') }}" alt="Job Listing Image"
                                            class="w-12 h-auto m-auto">
                                    </div>
                                    <div class="w-5/6">
                                        <div class="flex">
                                            <h3 class="text-md"><a href="/job/{{ $searchResult->job_id }}"
                                                    class="text-blue-700 font-semibold">{{ $searchResult->title }}</a></h3>
                                        </div>
                                        <p class="text-sm flex gap-3 font-light mt-1 mb-3">
                                            <span><i class="fa-solid fa-building text-gray-700"></i>
                                                {{ $searchResult->company }}</span>
                                            |
                                            <span><i class="fa-solid fa-map-marker-alt text-gray-700"></i>
                                                {{ $searchResult->location }}</span>
                                            |
                                            <span><i class="fa-solid fa-suitcase text-gray-700"></i>
                                                {{ $searchResult->type }}</span>
                                        </p>
                                        < x-job-listing-tags :jobListingTagsCsv="$searchResult->tags" />
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p class="m-auto text-center text-lg ">No jobs found for "{{ $searchTerm }}".</p>
                        @endif
                    </div>
                    <div class="tabcontent p-4" id="resources">
                        @if ($searchResults['resources']->count() > 0)
                            <div class="grid grid-cols-4 gap-4">
                                @foreach ($searchResults['resources'] as $searchResult)
                                    <a href="/resource/{{ $searchResult->resource_id }}" class="">
                                        <div class="bg-gray-50 hover:bg-blue-50">
                                            <img src="{{ asset('/assets/img/resource.png') }}" alt="resouce cover image"
                                                class="w-full h-full">
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        @else
                            <p class="mt-auto text-center text-lg ">No resources found for "{{ $searchTerm }}".</p>
                        @endif
                    </div>
                    <div class="tabcontent p-4" id="communities">
                        @if ($searchResults['communities']->count() > 0)
                            <div class="grid grid-cols-3 gap-3">
                                @foreach ($searchResults['communities'] as $searchResult)
                                    <a href="#" class="">
                                        <div class="border bg-gray-100 hover:bg-blue-50">
                                            <div class="">
                                                <img src="{{ asset('/assets/img/people_coding.jpeg') }}"
                                                    alt="community background image" class="w-full">
                                            </div>
                                            <div class="p-3">
                                                <h3 class="text-xl font-semibold">TechHub Community</h3>
                                                <p class="text-sm mt-1">
                                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora, sit.
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        @else
                            <p class="mt-auto text-center text-lg ">No communities found for "{{ $searchTerm }}".</p>
                        @endif
                    </div>
                    <div class="tabcontent p-4" id="blogs">
                        @if ($searchResults['blogs']->count() > 0)
                            <div class="grid grid-cols-3 gap-3">
                                @foreach ($searchResults['blogs'] as $searchResult)
                                <a href="#" class="">
                                    <div class=" bg-gray-100 border hover:bg-blue-50">
                                        <div class="">
                                            <img src="{{ asset('/assets/img/seven_though_interview_questions.png') }}"
                                                alt="blog cover image" class="w-full">
                                        </div>
                                        <div class="p-3">
                                            <h3 class="text-xl font-semibold">7 though interview questions</h3>
                                            <p class="text-sm mt-1">
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora, sit.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                        @else
                            <p class="mt-auto text-center text-lg ">No blogs found for "{{ $searchTerm }}".</p>
                        @endif
                    </div>
                </div>
            </main>
        </div>
        <div class="">
            <div class="rounded-full sticky top-28">
                <input type="text" class="shadow-md -z-10 p-3 outline-none rounded-full relative -end-10 bg-red-200"
                    placeholder="enter your search keyword...">
                <button id="results_page_search_button"
                    class="shadow-md z-10 bg-blue-700 p-3 px-4 rounded-full m-auto text-white hover:bg-gray-700"><i
                        class="fa-solid fa-search"></i></button>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#job_tab_button').addClass('border-white border-t-4 border-t-blue-700 bg-white');

            // Add click event handlers to each tab button
            $('.tablinks').on('click', function() {
                // Remove the active classes from all tabs
                $('.tablinks').removeClass('border-white border-t-4 border-t-blue-700 bg-white');
                $('.tablinks').addClass('border-b-2 bg-gray-100');

                // Add active classes to the clicked tab
                $(this).removeClass('border-b-2 bg-gray-100');
                $(this).addClass('border-white border-t-4 border-t-blue-700 bg-white');

                // Get the tab name from the data-tab attribute
                var tabName = $(this).data('tab');

                // Call the function to switch tabs
                switchTabs(tabName);
            });

            // Function to switch tabs
            function switchTabs(tabName) {
                // Hide all tab contents
                $('.tabcontent').hide();

                // Show the selected tab content
                $('#' + tabName).show();
            }

            // Show the default tab content
            switchTabs('jobs');


            // $('#results_page_search_button').on('click', function() {
            //     $('#center_container').slideToggle(700, 'swing');

            // });

            // search button
            // Initially, hide the search input
            $('input[type="text"]').hide();

            // // Add click event handler to the search button
            // $('.search-button').on('click', function() {
            //     $(this).addClass('fixed');
            //     // Toggle the visibility of the search input
            //     $('input[type="text"]').toggle();
            //     $('input[type="text"]').addClass('w-full');

            //     // If the input is visible, focus on it
            //     if ($('input[type="text"]').is(':visible')) {
            //         $('input[type="text"]').focus();
            //     }
            // });
        });
    </script>

@endsection
