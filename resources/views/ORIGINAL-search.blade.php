@extends('layout')

@section('content')
<div class="py-10 h-full w-4/5 m-auto flex gap-4">
    <div class="w-1/4">
        <aside class="sticky top-28"> {{-- fixme - top --}}
            <div class="shadow-md p-5">
                <h3 class="font-bold">Popular Tags</h5>
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
            </div>
        </aside>
    </div>
    <div class="w-3/4">
        <div class="shadow-md flex flex-row items-center">
            <input type="text" class="flex-grow p-2 outline-none" placeholder="frontend, remote, laravel...">
            <a href="#" class="p-2 bg-gray-100 hover:bg-blue-700 hover:text-white"><i class="fa-solid fa-search"></i></a>
        </div>
        <main>
            <div class="px-5">
                
            </div>
        </main>
    </div>
</div>
@endsection
