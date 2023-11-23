@extends('layout')

@section('content')
    <div class="py-10 h-full w-4/5 m-auto flex gap-4">
        <div class="w-1/4">
            <aside class="sticky top-28">
                <div class="shadow-md p-5">
                    <img src="{{ asset('/assets/img/logo_glyph_no_bg.png') }}" alt="Job Listing Image"
                        class="w-40 h-auto m-auto">
                </div>
            </aside>
        </div>
        <div class="w-3/4">
            <main>
                <div class="shadow-md p-5" id="">
                    <form action="/job/create" method="POST">
                        <h3 class="font-bold text-center text-lg">Create a Job Listing</h5>
                        <fieldset class="border-2 p-2">
                            <legend>About Company</legend>
                            <div class="flex flex-col gap-2 mt-2">
                                <div class="">
                                    <label for="" class="block font-light">Company Logo</label>
                                    <input type="file" name="" id="">
                                </div>
                                <div class="">
                                    <label for="" class="block font-light">Company</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div class="">
                                    <label for="" class="block font-light">Location</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div class="">
                                    <label for="" class="block font-light">Email</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div class="">
                                    <label for="" class="block font-light">Website</label>
                                    <input type="text" name="" id="">
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="border-2 p-2">
                            <legend>About Job</legend>
                            <div class="flex flex-col gap-2 mt-2">
                                <div class="">
                                    <label for="" class="block font-light">Title</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div class="">
                                    <label for="" class="block font-light">Type</label>
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
                                    <label for="" class="block font-light">Level</label>
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
                                <div class="">
                                    <label for="" class="block font-light">Tags (comma seperated)</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div class="">
                                    <label for="" class="block font-light">Description</label>
                                    <textarea name="" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                        </fieldset>

                        <button type="button" id="applyFilter"
                            class="block w-full bg-blue-700 text-white hover:bg-gray-700 mt-6 py-2">Apply</button>
                    </form>
                </div>
            </main>
        </div>
    </div>
@endsection
