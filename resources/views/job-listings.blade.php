@extends('layout')

@section('content')
    <div class="py-10 h-full w-4/5 m-auto flex gap-4">
        <div class="w-1/4">
            <aside class="sticky top-28 flex flex-col gap-5">
                <div class="shadow-md flex flex-row items-center">
                    <input type="text" class="flex-grow p-2 outline-none" placeholder="frontend, remote, laravel...">
                    <a href="#" class="p-2 bg-gray-100 hover:bg-blue-700 hover:text-white"><i
                            class="fa-solid fa-search"></i></a>
                </div>
                <div class="shadow-md p-5">
                    <h3 class="font-bold">Filter By</h5>
                        <div class="flex flex-col gap-2 mt-2">
                            <div class="">
                                <label for="" class="block font-light">Date Posted</label>
                                <select name="" id="dateFilter"
                                    class="p-1 outline-none w-full bg-gray-100 font-light">
                                    <option value="">(Anytime)</option>
                                    <option value="thisWeek">This Week</option>
                                    <option value="lastTwoWeeks">Last 2 Weeks</option>
                                    <option value="thisMonth">This Month</option>
                                </select>
                            </div>
                            <div class="">
                                <label for="" class="block font-light">Location</label>
                                <select name="" id="locationFilter"
                                    class="p-1 outline-none w-full bg-gray-100 font-light">
                                    <option value="">(All Locations)</option>
                                    <option value="remote">Remote</option>
                                    <option value="abuja">Abuja</option>
                                    <option value="kaduna">Kaduna</option>
                                </select>
                            </div>
                            <div class="">
                                <label for="" class="block font-light">Job Type</label>
                                <select name="" id="jobTypeFilter"
                                    class="p-1 outline-none w-full bg-gray-100 font-light">
                                    <option value="">(All Types)</option>
                                    <option value="fullTime">Full Time</option>
                                    <option value="partTime">Part Time</option>
                                    <option value="contract">Contract</option>
                                    <option value="internship">Internship</option>
                                </select>
                            </div>
                            <div class="">
                                <label for="" class="block font-light">Experience Level</label>
                                <select name="" id="experienceLevelFilter"
                                    class="p-1 outline-none w-full bg-gray-100 font-light">
                                    <option value="">(All Levels)</option>
                                    <option value="noExperience">No experience</option>
                                    <option value="internshipAndGraduate">Internship and Graduate</option>
                                    <option value="entryLevel">Entry Level</option>
                                    <option value="midLevel">Mid Level</option>
                                    <option value="seniorLevel">Senior Level</option>
                                    <option value="executive">Executive</option>
                                </select>
                            </div>
                        </div>
                        <button type="button" id="applyFilter"
                            class="block w-full bg-blue-700 text-white hover:bg-gray-700 mt-6 py-2">Apply</button>
                </div>
                <a href="#"> {{-- todo - subscribe modal --}}
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
                        <div class="shadow-md flex gap-3 p-5 mb-3 border-2 border-t-0 border-b-0 border-r-0 hover:border-s-blue-700 items-center"
                            id="job-listing-div">
                            <div class=" w-1/6 h-auto justify-center"> {{-- fixme --}}
                                <img src="{{ asset('/assets/img/logo_glyph_no_bg.png') }}" alt="Job Listing Image"
                                    class=" w-20 h-auto m-auto">
                            </div>
                            <div class="w-5/6">
                                <div class="header -mt-2">
                                    {{-- <div class=""> --}}
                                    <h3 class="text-xl"><a href="/job/{{ $jobListing->job_id }}"
                                            class="text-blue-700 font-semibold">{{ $jobListing->title }}</a></h3>
                                    {{-- </div> --}}
                                    <p class="header-level-2 flex gap-3 font-light mt-1">
                                        <span><i class="fa-solid fa-building text-gray-700"></i>
                                            {{ $jobListing->company }}</span>
                                        |
                                        <span><i class="fa-solid fa-map-marker-alt text-gray-700"></i>
                                            {{ $jobListing->location }}</span>
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

                                <p class="mt-3">{{ $text_truncated }}</p>
                                <div class="flex justify-between mt-5">
                                    < x-job-listing-tags :jobListingTagsCsv="$jobListing->tags" />
                                    <div class="flex gap-3">
                                        <a href="#" class="text-gray-400 hover:text-gray-700" title="save"><i
                                                class="fa-solid fa-bookmark"></i></a>
                                        <a href="#" class="text-gray-400 hover:text-gray-700" title="share"><i
                                                class="fa-solid fa-share-nodes"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="mt-10 block w-full">
                        <ul class="flex gap-2 justify-center">
                            @if ($currentPage > 1)
                                <li class="bg-gray-100 py-1 px-3 hover:bg-gray-700 hover:text-white">
                                    <a href="{{ route('job.index', ['page' => $currentPage - 1]) }}">Previous</a>
                                </li>
                            @else
                                <li class="bg-gray-100 py-1 px-3 disabled">
                                    Previous
                                </li>
                            @endif

                            @for ($i = $currentPage - 1; $i <= $currentPage + 1; $i++)
                                @if ($i > 0 && $i <= $jobListings->lastPage())
                                    <li
                                        class="py-1 px-3 hover:bg-gray-700 hover:text-white 
                                    @if ($i == $currentPage) bg-blue-700 text-white @endif">
                                        <a href="{{ route('job.index', ['page' => $i]) }}">{{ $i }}</a>
                                    </li>
                                @endif
                            @endfor

                            @if ($currentPage < $jobListings->lastPage())
                                <li class="bg-gray-100 py-1 px-3 hover:bg-gray-700 hover:text-white">
                                    <a href="{{ route('job.index', ['page' => $currentPage + 1]) }}">Next</a>
                                </li>
                            @else
                                <li class="bg-gray-100 py-1 px-3 disabled">
                                    Next
                                </li>
                            @endif
                        </ul>
                    </div>
                @else
                    <h3 class="text-center no-job-listings-title mt-3">No Job Listings</h3>
                @endunless

            </main>
        </div>
    </div>
@endsection
