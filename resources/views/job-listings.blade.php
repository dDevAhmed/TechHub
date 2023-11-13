@extends('layout')

@section('content')

    <div class="p-5 h-full w-full">
        <div class="w-3/5 m-auto mt-16 text-center">
            <h1 class="text-blue-900 font-bold text-4xl">Welcome to <span>Job Listings</span></h1>
            <p class="text-md text-gray-600 mt-3">...the central hub for tech enthusiasts to connect, share, and stay updated.</p>

            <div class="border border--gray-500 shadow-lg flex items-center mt-12 p-0">
                <i class="fa-solid fa-search ms-3"></i>
                <input type="text" name="" id="" class="p-2 flex-grow outline-none" placeholder="search for jobs, books, communities and more..." autofocus>
                <button class="bg-gray-100 font-semibold px-5 py-2 hover:bg-blue-900 hover:text-white m-0">Search</button>
            </div>

            {{-- cards --}}
            <div class="flex gap-4 justify-between mt-10">
                <div class="shadow p-5 bg-gray-100 item-center">
                    <i class="fa-solid fa-search text-blue-900"></i>
                    <h3 class="font-semibold mt-3">Get Hired</h3>
                    <p class="">Find cool Jobs that suit your needs...</p>
                </div>
                <div class="shadow p-5 bg-gray-100 items-center ">
                    <i class="fa-solid fa-users text-blue-900"></i>
                    <h3 class="font-semibold mt-3">Share Ideas</h3>
                    <p class="">Network and build cool stuffs with like minded...</p>
                </div>
                <div class="shadow p-5 bg-gray-100 items-center ">
                    <i class="fa-solid fa-newspaper text-blue-900"></i>
                    <h3 class=" font-semibold mt-3">Stay Updated</h3>
                    <p class="">Follow the latest happenings in the industry...</p>
                </div>
            </div>
        </div>
    </div>

@endsection