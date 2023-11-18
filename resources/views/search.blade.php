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
                                <select name="" id=""
                                    class="p-1 outline-none w-full bg-gray-100 font-light">
                                    <option value="">(All Locations)</option>
                                    <option value="">Remote</option>
                                    <option value="">Abuja</option>
                                    <option value="">Kaduna</option>
                                </select>
                            </div>
                            <div class="">
                                <label for="" class="block font-light">Job Type</label>
                                <select name="" id=""
                                    class="p-1 outline-none w-full bg-gray-100 font-light">
                                    <option value="">(All Types)</option>
                                    <option value="">Full Time</option>
                                    <option value="">Part Time</option>
                                    <option value="">Contract</option>
                                    <option value="">Internship</option>
                                </select>
                            </div>
                            <div class="">
                                <label for="" class="block font-light">Experience Level</label>
                                <select name="" id=""
                                    class="p-1 outline-none w-full bg-gray-100 font-light">
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
            {{-- <div class="shadow-md flex flex-row items-center">
                <input type="text" class="flex-grow p-2 outline-none" placeholder="frontend, remote, laravel...">
                <a href="#" class="p-2 bg-gray-100 hover:bg-blue-700 hover:text-white"><i class="fa-solid fa-search"></i></a>
            </div> --}}
            <main class="shadow-md">
                <div class="bg-white pb-3 sticky top-20"> {{-- fixme - top scale --}}
                    <div class="flex">
                        <button
                            class="tablinks inline-block p-4 border-white border-t-4 border-t-blue-700 border-e border-e-gray-300 w-full bg-white"
                            data-tab="jobs">
                            Jobs
                            <span
                                class="inline-flex items-center justify-center w-4 h-4 ms-2 text-xs font-semibold text-white bg-gray-700 rounded-full">
                                2
                            </span>
                        </button>
                        <button class="tablinks inline-block p-4 border-b-2 border-e border-e-gray-300 w-full bg-gray-100"
                            data-tab="resources">
                            Resources
                            <span
                                class="inline-flex items-center justify-center w-4 h-4 ms-2 text-xs font-semibold text-white bg-gray-700 rounded-full">
                                2
                            </span>
                        </button>
                        <button class="tablinks inline-block p-4 border-b-2 border-e border-e-gray-300 w-full bg-gray-100"
                            data-tab="communities">
                            Communities
                            <span
                                class="inline-flex items-center justify-center w-4 h-4 ms-2 text-xs font-semibold text-white bg-gray-700 rounded-full">
                                2
                            </span>
                        </button>
                        <button class="tablinks inline-block p-4 border-b-2 w-full bg-gray-100" data-tab="blogs">
                            Blogs
                            <span
                                class="inline-flex items-center justify-center w-4 h-4 ms-2 text-xs font-semibold text-white bg-gray-700 rounded-full">
                                2
                            </span>
                        </button>
                    </div>
                </div>
                <div id="tab-contents">
                    <div class="tabcontent p-4" id="jobs">
                        <h3><i class="fa-solid fa-suitcase text-gray-700"></i> Jobs</h3>
                        <p class="text-sm text-gray-700">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                        </p>
                    </div>
                    <div class="tabcontent p-4" id="resources">
                        <h3><i class="fa-solid fa-book text-gray-700"></i> Resources</h3>
                        <p class="text-sm text-gray-700">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                        </p>
                    </div>
                    <div class="tabcontent p-4" id="communities">
                        <h3><i class="fa-solid fa-users"></i> Communities</h3>
                        <p class="text-sm text-gray-700">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                        </p>
                    </div>
                    <div class="tabcontent p-4" id="blogs">
                        <h3><i class="fa-solid fa-blog"></i> Blogs</h3>
                        <p class="text-sm text-gray-700">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque tempora ipsa? Laboriosam
                            eum illum quibusdam fuga? Reiciendis adipisci ex numquam labore earum? Et quidem dolorum rerum
                            ullam saepe fuga.

                        </p>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
            // Add click event listener to all buttons
            $('.tablinks').click(function() {
                // Get the 'data-tab' attribute value
                var tabName = $(this).data('tab');

                // Hide all tab content with fade effect
                $('.tabcontent').fadeOut('fast');

                // Show the selected tab content with fade effect
                $('#' + tabName).fadeIn('slow');

                // Remove 'active' class from all buttons
                $('.tablinks').removeClass('active');

                // Add 'active' class to the clicked button
                $(this).addClass('active');
            });
        });
    </script>
@endsection
