@extends('layout')

@section('content')
    <div class="py-10 h-full w-4/5 m-auto flex gap-4">
        <div class=" w-3/12">
            <aside class="sticky top-28">
                <div class="shadow-md p-5 justify-center">
                    <img src="{{ asset('/assets/img/logo_glyph_no_bg.png') }}" alt="Job Listing Image" class="w-40 h-auto m-auto">
                    <h3 class="mt-3 text-gray-700 font-semibold text-center">{{ $jobListing->title }}</h3>
                </div>
            </aside>
        </div>
        <div class="w-8/12">
            <main>
                <div class="p-5 shadow-md">
                    <p class="header-level-2 flex gap-3 text-gray-700 mt-1">
                        <span><i class="fa-solid fa-building"></i> {{ $jobListing->company }}</span>
                        |
                        <span><i class="fa-solid fa-map-marker-alt"></i> {{ $jobListing->location }}</span>
                        |
                        <span><i class="fa-solid fa-suitcase"></i> {{ $jobListing->type }}</span>
                    </p>
                    <hr class="mt-2">
                    <p class="mt-3 text-gray-700">{{ $jobListing->description }}</p>
                    <div class="mt-5"><x-job-listing-tags :jobListingTagsCsv="$jobListing->tags" /></div>
                    <div class="mt-5 flex gap-4">
                        <a href="mailto:{{ $jobListing->email }}" class="text-1xl bg-blue-700 py-2 px-5 flex-grow text-center text-white hover:bg-gray-700"><i class="fa-solid fa-envelope"></i>
                            Send Email</a>
                        <a href="{{ $jobListing->website }}" target="_blank" class="text-1xl bg-blue-700 py-2 px-5 flex-grow text-center text-white hover:bg-gray-700"><i
                                class="fa-solid fa-globe"></i> Visit Website</a>
                    </div>
                    {{-- <hr class="mt-5"> --}}
                    
                </div>
            </main>
        </div>
        <div class=" w-1/12">
            <div class="mt-3 flex flex-col items-center sticky top-28">
                Share:
                <span class="flex flex-col gap-2">
                    <a href="#" title="Facebook" class="text-2xl hover:text-blue-700 text-gray-700 hover:scale-150"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" title="Twitter" class="text-2xl hover:text-blue-700 text-gray-700 hover:scale-150"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" title="WhatsApp" class="text-2xl hover:text-blue-700 text-gray-700 hover:scale-150"><i class="fa-brands fa-whatsapp"></i></a>
                </span>
            </div>
        </div>
    </div>
@endsection
