@extends('layout')

@section('content')
    <div class="py-10 h-full w-4/5 m-auto flex gap-4">
        <div class="w-1/4">
            <aside class="sticky top-28"> {{-- fixme - top --}}
                <div class="shadow-md p-5 justify-center">
                    <img src="{{ asset('/assets/img/laravel-logo.png') }}" alt="Job Listing Image" class="">
                    <h3 class="mt-3 text-gray-700 font-semibold text-center">{{ $jobListing->title }}</h3>
                </div>
            </aside>
        </div>
        <div class="w-3/4">
            <main>
                <div class="px-5">
                    <p class="header-level-2 flex gap-3 text-gray-700 mt-1">
                        <span><i class="fa-solid fa-building"></i> {{ $jobListing->company }}</span>
                        |
                        <span><i class="fa-solid fa-map-marker-alt"></i> {{ $jobListing->location }}</span>
                        |
                        <span><i class="fa-solid fa-suitcase"></i> {{ $jobListing->type }}</span>
                    </p>
                    <hr class="mt-2">
                    <p class="mt-3 text-gray-700">{{ $jobListing->description }}</p>
                    <x-job-listing-tags :jobListingTagsCsv="$jobListing->tags" />
                    <div class="mt-5 flex gap-4">
                        <a href="mailto:{{ $jobListing->email }}" class="text-1xl bg-blue-700 py-2 px-5 flex-grow text-center text-white hover:bg-gray-700"><i class="fa-solid fa-envelope"></i>
                            Send Email</a>
                        <a href="{{ $jobListing->website }}" target="_blank" class="text-1xl bg-blue-700 py-2 px-5 flex-grow text-center text-white hover:bg-gray-700"><i
                                class="fa-solid fa-globe"></i> Visit Website</a>
                    </div>
                    <hr class="mt-5">
                    <div class="mt-3 flex items-center ">
                        Share: &nbsp;
                        <span class="flex gap-4">
                            <a href="#" title="Facebook" class="text-xl hover:text-blue-700 text-gray-700 hover:scale-150"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#" title="Twitter" class="text-xl hover:text-blue-700 text-gray-700 hover:scale-150"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#" title="WhatsApp" class="text-xl hover:text-blue-700 text-gray-700 hover:scale-150"><i class="fa-brands fa-whatsapp"></i></a>
                        </span>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
