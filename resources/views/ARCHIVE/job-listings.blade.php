@extends('layout')

@section('content')

    <div class="container py-5 px-3 mx-auto row">
        <div class="container col-lg-3">
            <aside class="position-sticky d-flex flex-column row-gap-4" id="job-listings-page-aside">
                    <div class="shadow rounded-1 d-flex flex-row align-items-center search-job-listings-bar">
                        <input type="text" class="flex-grow-1 p-2" placeholder="frontend, backend, laravel...">
                        <a href="#" class="align-self-center p-2 rounded-end-1"><i class="fa-solid fa-search"></i></a>
                    </div>
                    <div class="shadow rounded-1 p-3 settings d-flex flex-column row-gap-2">
                        <h5 class="h5">Filter By</h5>
                        <div class="settings-row">
                            <label for="" class="settings-label">Date Posted</label>
                            <select name="" id="" class="settings-dropdown">
                                <option value="">(Anytime)</option>
                                <option value="">This Week</option>
                                <option value="">Last 2 Weeks</option>
                                <option value="">This Month</option>
                            </select>
                        </div>
                        <div class="settings-row">
                            <label for="" class="settings-label">Location</label>
                            <select name="" id="" class="settings-dropdown">
                                <option value="">(All Locations)</option>
                                <option value="">Remote</option>
                                <option value="">Abuja</option>
                                <option value="">Kaduna</option>
                            </select>
                        </div>
                        <div class="settings-row">
                            <label for="" class="settings-label">Job Type</label>
                            <select name="" id="" class="settings-dropdown">
                                <option value="">(All Types)</option>
                                <option value="">Full Time</option>
                                <option value="">Part Time</option>
                                <option value="">Contract</option>
                                <option value="">Internship</option>
                                {{-- <option value="">This Month</option> --}}
                            </select>
                        </div>
                        <div class="settings-row">
                            <label for="" class="settings-label">Experience Level</label>
                            <select name="" id="" class="settings-dropdown">
                                <option value="">(All Levels)</option>
                                <option value="">No experience</option>
                                <option value="">Internship and Graduate</option>
                                <option value="">Entry Level</option>
                                <option value="">Mid Level</option>
                                <option value="">Senior Level</option>
                                <option value="">Executive</option>
                            </select>
                        </div>
                        <button type="button" class="btn btn-block apply-filter-button mt-2">Apply</button>

                    </div>
                    <div class="shadow rounded-1 p-3 d-flex flex-column row-gap-1 align-items-center subscribe-mail">
                        <i class="fa-solid fa-envelope-open"></i>
                        <p>Get notified of new jobs</p>
                        <div class="d-flex flex-row align-items-center rounded-1 email-subscribe">
                            <input type="text" class="flex-grow-1 rounded-2">
                            <a href="#" class="align-self-center p-1 rounded-end-0"><i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
            </aside>
        </div>
        <div class="container col-lg-9">
            <main>
                @unless ($jobListings->count() == 0)
                    @foreach ($jobListings as $jobListing)
                        <div class="job-listing-div px-3 mb-4 border-start border-dark-subtle">

                            <div class="header">
                                <div class="header-level-1  d-flex justify-content-between">
                                    <h3 class="job-listing-title"><a href="/job/{{ $jobListing->job_id }}">{{ $jobListing->title }}</a></h3>
                                    <div class="save-share">
                                        <a href="#" title="save"><i class="fa-solid fa-heart"></i></a>
                                        <a href="#" title="share"><i class="fa-solid fa-share-nodes"></i></a>
                                    </div>
                                </div>
                                <p class="header-level-2">
                                    <span><i class="fa-solid fa-building"></i> {{ $jobListing->company }}</span>
                                    |
                                    <span><i class="fa-solid fa-map-marker-alt"></i> {{ $jobListing->location }}</span>
                                    |
                                    <span><i class="fa-solid fa-suitcase"></i> {{ $jobListing->type }}</span>
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

                            <p class="body job-listing-description">{{ $text_truncated }}</p>
                            <x-job-listing-tags :jobListingTagsCsv="$jobListing->tags" />
                        </div>
                    @endforeach
                @else
                    <h3 class="text-center no-job-listings-title mt-3">No Job Listings</h3>
                @endunless
            </main>
            <nav aria-label="Page navigation example" class="mt-5">
                <ul class="pagination">
                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
