@extends('layout')

@section('content')
    <div class="job-listing-detail-container">
        <div class="job-listing-left-wrapper">
            <div class="wrapper">
                <img src="{{ asset('/assets/img/laravel-logo.png') }}" alt="Job Listing Image">
                <h3 class="job-listing-title">{{ $jobListing->title }}</h3>
            </div>
        </div>

        <div class="job-listing-right-wrapper">
            <div class="job-listing-content">
                <p class="job-listing-company-location">
                    <span><i class="fa-solid fa-building"></i> {{ $jobListing->company }}</span>
                    |
                    <span><i class="fa-solid fa-map-marker-alt"></i> {{ $jobListing->location }}</span>
                    |
                    <span><i class="fa-solid fa-suitcase"></i> {{ $jobListing->type }}</span>
                </p>
                <hr>
                <p class="job-listing-description">{{ $jobListing->description }}</p>
                <x-job-listing-tags :jobListingTagsCsv="$jobListing->tags" />
                <div class="email-website">
                    <a href="mailto:{{ $jobListing->email }}"><i class="fa-solid fa-envelope"></i> Send Email</a>
                    <a href="{{ $jobListing->website }}" target="_blank"><i class="fa-solid fa-globe"></i> Visit Website</a>
                </div>
                <hr>
                <div class="share">
                    Share: <a href="#" title="Facebook"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" title="Twitter"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" title="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>

            {{-- <div class="job-listing-settings">
                <h3 class="">Settings</h3>
                <a href="#"><i class="fa-solid fa-edit"></i> Update</a>
                <a href="#"><i class="fa-solid fa-trash"></i> Delete</a>
            </div> --}}
        </div>
    </div>
@endsection
