@extends('layout')

@section('content')
    <div class="py-10 h-full w-4/5 m-auto flex gap-4">
        <div class="w-1/4">
            <aside class="sticky top-28"> {{-- fixme - top --}}
                <div class="shadow-md p-5">
                    <h3 class="font-bold">Popular Tags</h5>
                        <div class="flex flex-wrap gap-2 mt-5">
                            <a href="/results?tag=tag"
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
        <div class="w-3/4">
            <div class="shadow-md flex flex-row items-center">
                <input type="text" class="flex-grow p-2 outline-none" placeholder="enter your search keyword...">
                <a href="#" class="p-2 bg-gray-100 hover:bg-blue-700 hover:text-white"><i
                        class="fa-solid fa-search"></i></a>
            </div>
            <main class="shadow-md mt-4">
                <div class="bg-white pb-3 sticky top-20"> {{-- fixme - top scale --}}
                    <div class="flex">
                        <button
                            class="tablinks inline-block p-4 border-white border-t-4 border-t-blue-700 border-e border-e-gray-300 w-full bg-white"
                            data-tab="jobs">
                            Jobs
                            <span
                                class="inline-flex items-center justify-center w-4 h-4 ms-2 text-xs font-semibold text-white bg-gray-700 rounded-full">
                                {{ $jobSearchCount }}
                            </span>
                        </button>
                        <button class="tablinks inline-block p-4 border-b-2 border-e border-e-gray-300 w-full bg-gray-100"
                            data-tab="resources">
                            Resources
                            <span
                                class="inline-flex items-center justify-center w-4 h-4 ms-2 text-xs font-semibold text-white bg-gray-700 rounded-full">
                                {{ $resourceSearchCount }}
                            </span>
                        </button>
                        <button class="tablinks inline-block p-4 border-b-2 border-e border-e-gray-300 w-full bg-gray-100"
                            data-tab="communities">
                            Communities
                            <span
                                class="inline-flex items-center justify-center w-4 h-4 ms-2 text-xs font-semibold text-white bg-gray-700 rounded-full">
                                {{ $communitySearchCount }}
                            </span>
                        </button>
                        <button class="tablinks inline-block p-4 border-b-2 w-full bg-gray-100" data-tab="blogs">
                            Blogs
                            <span
                                class="inline-flex items-center justify-center w-4 h-4 ms-2 text-xs font-semibold text-white bg-gray-700 rounded-full">
                                {{ $blogSearchCount }}
                            </span>
                        </button>
                    </div>
                </div>
                <div id="tab-contents">
                    <div class="tabcontent p-4" id="jobs">
                        @if ($searchResults['job_listings']->count() > 0)
                            @foreach ($searchResults['job_listings'] as $searchResult)
                                <div class="bg-gray-50 mb-3 p-3 hover:bg-blue-50">
                                    <div class="flex">
                                        <h3 class="text-md"><a href="/job/{{ $searchResult->job_id }}"
                                                class="text-blue-700 font-semibold">{{ $searchResult->title }}</a></h3>
                                    </div>
                                    <p class="text-sm flex gap-3 font-light mt-1">
                                        <span><i class="fa-solid fa-building text-gray-700"></i>
                                            {{ $searchResult->company }}</span>
                                        |
                                        <span><i class="fa-solid fa-map-marker-alt text-gray-700"></i>
                                            {{ $searchResult->location }}</span>
                                        |
                                        <span><i class="fa-solid fa-suitcase text-gray-700"></i>
                                            {{ $searchResult->type }}</span>
                                    </p>
                                </div>
                            @endforeach
                        @else
                            <p class="mt-5 text-center text-lg ">No results found for "{{ $searchTerm }}".</p>
                        @endif
                    </div>
                    <div class="tabcontent p-4" id="resources">
                        <h3><i class="fa-solid fa-book text-gray-700"></i> Resources</h3>

                        @if ($searchResults['resources']->count() > 0)
                            @foreach ($searchResults['resources'] as $searchResult)
                                <div class="bg-gray-50 mb-3 p-3 hover:bg-blue-50">
                                    <div class="flex">
                                        <h3 class="text-md"><a href="/resource/{{ $searchResult->resource_id }}"
                                                class="text-blue-700 font-semibold">{{ $searchResult->title }}</a></h3>
                                    </div>
                                    <p class="text-sm flex gap-3 font-light mt-1">
                                        <span><i class="fa-solid fa-book-open text-gray-700"></i>
                                            {{ $searchResult->description }}</span>
                                    </p>
                                </div>
                            @endforeach
                        @else
                            <p class="mt-5 text-center text-lg ">No resources found for "{{ $searchTerm }}".</p>
                        @endif
                    </div>
                    <div class="tabcontent p-4" id="communities">
                        <h3><i class="fa-solid fa-users"></i> Communities</h3>

                        @if ($searchResults['communities']->count() > 0)
                            @foreach ($searchResults['communities'] as $searchResult)
                                <div class="bg-gray-50 mb-3 p-3 hover:bg-blue-50">
                                    <div class="flex">
                                        <h3 class="text-md"><a href="/community/{{ $searchResult->community_id }}"
                                                class="text-blue-700 font-semibold">{{ $searchResult->title }}</a></h3>
                                    </div>
                                    <p class="text-sm flex gap-3 font-light mt-1">
                                        <span><i class="fa-solid fa-user text-gray-700"></i>
                                            {{ $searchResult->created_by }}</span>
                                    </p>
                                </div>
                            @endforeach
                        @else
                            <p class="mt-5 text-center text-lg ">No communities found for "{{ $searchTerm }}".</p>
                        @endif
                    </div>
                    <div class="tabcontent p-4" id="blogs">
                        <h3><i class="fa-solid fa-users"></i> Blogs</h3>

                        @if ($searchResults['blogs']->count() > 0)
                            @foreach ($searchResults['blogs'] as $searchResult)
                                <div class="bg-gray-50 mb-3 p-3 hover:bg-blue-50">
                                    <div class="flex">
                                        <h3 class="text-md"><a href="/blog/{{ $searchResult->blog_id }}"
                                                class="text-blue-700 font-semibold">{{ $searchResult->title }}</a></h3>
                                    </div>
                                    <p class="text-sm flex gap-3 font-light mt-1">
                                        <span><i class="fa-solid fa-user text-gray-700"></i>
                                            {{ $searchResult->post_by }}</span>
                                    </p>
                                </div>
                            @endforeach
                        @else
                            <p class="mt-5 text-center text-lg ">No blogs found for "{{ $searchTerm }}".</p>
                        @endif
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.tablinks').click(function() {
                var tabName = $(this).data('tab');

                // Fade out only the active tab
                $('.tabcontent').not('#' + tabName).fadeOut('fast');
                $('#' + tabName).fadeIn('slow');

                $('.tablinks').removeClass('active');
                $(this).addClass('active');

                // Remove existing border classes
                $(this).removeClass('border-white border-t-4 border-t-blue-700 border-e border-e-gray-300');

                // Get the index of the clicked button
                var index = $('.tablinks').index(this);

                // Add appropriate border classes based on the position
                if (index < 2) {
                    $(this).addClass('border-b-2 border-e border-e-gray-300');
                } else if (index === 3) {
                    $(this).addClass('border-b-2 border-e border-s-gray-300');
                }
            });

            // Show the first tab by default
            $('#jobs').fadeIn('slow');
            $('.tablinks:first').addClass('active');
            $('.tablinks:first').removeClass(
            'border-white border-t-4 border-t-blue-700 border-e border-e-gray-300');
            $('.tablinks:first').addClass('border-b-2 border-e border-e-gray-300');
        });
    </script>

@endsection
