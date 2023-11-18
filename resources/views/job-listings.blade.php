@extends('layout')

@section('content')
    <div class="py-10 h-full w-4/5 m-auto flex gap-4">
        <div class="w-1/4">
            <aside class="sticky top-28 flex flex-col gap-5">
                <div class="shadow-md flex flex-row items-center">
                    <input type="text" class="flex-grow p-2 outline-none" placeholder="frontend, remote, laravel...">
                    <a href="#" class="p-2 bg-gray-100 hover:bg-blue-700 hover:text-white"><i class="fa-solid fa-search"></i></a>
                </div>
                <div class="shadow-md p-5">
                    <h3 class="font-bold">Filter By</h5>
                    <div class="flex flex-col gap-2 mt-2">
                        <div class="">
                            <label for="" class="block font-light">Date Posted</label>
                            <select name="" id="" class="p-1 outline-none w-full bg-gray-100 font-light">
                                <option value="">(Anytime)</option>
                                <option value="">This Week</option>
                                <option value="">Last 2 Weeks</option>
                                <option value="">This Month</option>
                            </select>
                        </div>
                        <div class="">
                            <label for="" class="block font-light">Location</label>
                            <select name="" id="" class="p-1 outline-none w-full bg-gray-100 font-light">
                                <option value="">(All Locations)</option>
                                <option value="">Remote</option>
                                <option value="">Abuja</option>
                                <option value="">Kaduna</option>
                            </select>
                        </div>
                        <div class="">
                            <label for="" class="block font-light">Job Type</label>
                            <select name="" id="" class="p-1 outline-none w-full bg-gray-100 font-light">
                                <option value="">(All Types)</option>
                                <option value="">Full Time</option>
                                <option value="">Part Time</option>
                                <option value="">Contract</option>
                                <option value="">Internship</option>
                            </select>
                        </div>
                        <div class="">
                            <label for="" class="block font-light">Experience Level</label>
                            <select name="" id="" class="p-1 outline-none w-full bg-gray-100 font-light">
                                <option value="">(All Levels)</option>
                                <option value="">No experience</option>
                                <option value="">Internship and Graduate</option>
                                <option value="">Entry Level</option>
                                <option value="">Mid Level</option>
                                <option value="">Senior Level</option>
                                <option value="">Executive</option>
                            </select>
                        </div>
                    </div>
                    <button type="button" class="block w-full bg-blue-700 text-white hover:bg-gray-700 mt-6 py-2">Apply</button>
                </div>
                <a href="#">    {{-- todo - subscribe modal --}}
                    <div class="shadow-md p-5 flex flex-col items-center">
                        <i class="fa-solid fa-envelope-open text-blue-700 text-5xl"></i>
                        <p class="mt-3">Click to get notified of new jobs</p>
                        {{-- <div class="flex flex-row items-center">
                            <input type="text" class="flex-grow-1 border border-gray-100">
                            <a href="#" class="p-1"><i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div> --}}
                    </div>
                </a>
            </aside>
        </div>
        <div class="w-3/4">
            <main>
                @unless ($jobListings->count() == 0)
                    @foreach ($jobListings as $jobListing)
                        <div class="block px-3 py-1 mb-7 border-2 border-s-gray-300 border-t-0 border-b-0 border-r-0 hover:border-s-blue-700 items-center" id="job-listing-div">

                            <div class="header -mt-2">
                                <div class="header-level-1 flex justify-between">
                                    <h3 class="text-xl"><a href="/job/{{ $jobListing->job_id }}" class="text-blue-700 font-semibold">{{ $jobListing->title }}</a></h3>
                                    {{-- todo - wrap title --}}
                                    <div class="flex gap-3">
                                        <a href="#" class="text-gray-400 hover:text-gray-700" title="save"><i class="fa-solid fa-bookmark"></i></a>
                                        <a href="#" class="text-gray-400 hover:text-gray-700" title="share"><i class="fa-solid fa-share-nodes"></i></a>
                                    </div>
                                </div>
                                <p class="header-level-2 flex gap-3 font-light mt-1">
                                    <span><i class="fa-solid fa-building text-gray-700"></i> {{ $jobListing->company }}</span>
                                    |
                                    <span><i class="fa-solid fa-map-marker-alt text-gray-700"></i> {{ $jobListing->location }}</span>
                                    |
                                    <span><i class="fa-solid fa-suitcase text-gray-700"></i> {{ $jobListing->type }}</span>
                                </p>
                            </div>

                            {{-- php code for description ellipsis --}}
                            @php
                                // truncates the text
                                $text_shorten = mb_substr($jobListing->description, 0, mb_strpos($jobListing->description, ' ', 200));
                                // prevents last word truncation
                                $text_truncated = trim(mb_substr($text_shorten, 0, mb_strrpos($text_shorten, ' ')));
                                // Let's check if it ends in a comma or a dot.
                                if (substr($text_truncated, -1) == ',') {
                                    // If it's a comma, let's remove it and add a ellipsis
                                    $text_truncated = rtrim($text_truncated, ',');
                                    $text_truncated .= '...';
                                } elseif (substr($text_truncated, -1) == '.') {
                                    // If it's a dot, let's remove it and add a ellipsis
                                    $text_truncated = rtrim($text_truncated, '.');
                                    $text_truncated .= '...';
                                } else {
                                    // Doesn't end in dot or comma, just adding ellipsis here
                                    $text_truncated .= '...';
                                }
                            @endphp

                            <p class="body job-listing-description mt-3">{{ $text_truncated }}</p>
                            <x-job-listing-tags :jobListingTagsCsv="$jobListing->tags" />
                        </div>
                    @endforeach

                    <nav aria-label="Page navigation example" class="mt-10 block w-full">
                        <ul class="flex gap-2 justify-center">
                          <li class="bg-gray-100 py-1 px-3 hover:bg-gray-700 hover:text-white"><a class="" href="#">Previous</a></li>
                          <li class="bg-blue-700 text-white py-1 px-3 hover:bg-gray-700 hover:text-white"><a class="" href="#">1</a></li>
                          <li class="bg-gray-100 py-1 px-3 hover:bg-gray-700 hover:text-white"><a class="" href="#">2</a></li>
                          <li class="bg-gray-100 py-1 px-3 hover:bg-gray-700 hover:text-white"><a class="" href="#">3</a></li>
                          <li class="bg-gray-100 py-1 px-3 hover:bg-gray-700 hover:text-white"><a class="" href="#">Next</a></li>
                        </ul>
                    </nav>
                @else
                    <h3 class="text-center no-job-listings-title mt-3">No Job Listings</h3>
                @endunless

            </main>
        </div>
    </div>
@endsection
