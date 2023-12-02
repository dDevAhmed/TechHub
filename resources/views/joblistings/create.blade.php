@extends('layout')

@section('content')
    <div class="py-10 h-full w-3/5 m-auto">
        <main>
            <div class="shadow-md p-5 w-full" id="">
                <form action="/job/create" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h3 class="font-bold text-center text-2xl">Create a Job Listing</h5>
                        <fieldset class="border p-2 mt-5">
                            <legend class="border border-gray-300 py-1 px-3">About Company</legend>
                            <div class="flex gap-5 mt-2 items-start">
                                <div class="">
                                    <label for="" class="">Logo</label>
                                    <div class="border h-36 w-36 mt-2 flex flex-col items-center">
                                        <img src="{{ old('logo') ? old('logo') : '' }}" alt="" class="m-auto p-3"
                                            id="companyLogo">
                                    </div>
                                    <i class="fa-solid fa-camera cursor-pointer bg-gray-100 text-gray-700 py-2 px-1 w-full text-center mt-2"
                                        id="cameraUpload"></i>
                                    <input type="file" name="logo" id="logo" class="hidden">
                                    @error('logo')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                {{-- todo - use generator - first check then assign --}}
                                @php
                                    $job_id = substr(time() . mt_rand(100000, 999999), -6);
                                @endphp
                                <input type="text" class="hidden" name="job_id" value="{{ $job_id }}">
                                {{-- todo - get from user session --}}
                                <input type="text" class="hidden" name="user_id" value="{{ $job_id }}">

                                <div class="grid grid-cols-2 flex-grow gap-3">
                                    <div class="">
                                        <label for="" class="block">Company</label>
                                        <input type="text" name="company" id=""
                                            class="p-1 bg-gray-100 focus:border-s-2 focus:outline-none focus:border-s-blue-700 w-full mt-2"
                                            value="{{ old('company') }}">
                                        @error('company')
                                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="">
                                        <label for="" class="block">Location</label>
                                        <input type="text" name="location" id="locationField"
                                            class="p-1 bg-gray-100 focus:border-s-2 focus:outline-none focus:border-s-blue-700 w-full mt-2"
                                            value="{{ old('location') }}">
                                        @error('location')
                                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                        @enderror
                                        <span class="flex gap-1 items-center">
                                            <label for="remote_location">
                                                <input type="checkbox" name="" id="remote_location"> Remote
                                            </label>
                                        </span>
                                    </div>
                                    <div class="">
                                        <label for="" class="block">Email</label>
                                        <input type="email" name="email" id=""
                                            class="p-1 bg-gray-100 focus:border-s-2 focus:outline-none focus:border-s-blue-700 w-full mt-2"
                                            value="{{ old('email') }}">
                                        @error('email')
                                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="">
                                        <label for="" class="block">Website</label>
                                        <input type="text" name="website" id=""
                                            class="p-1 bg-gray-100 focus:border-s-2 focus:outline-none focus:border-s-blue-700 w-full mt-2"
                                            value="{{ old('website') }}">
                                        @error('website')
                                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="border p-2 mt-5">
                            <legend class="border border-gray-300 py-1 px-3">About Job</legend>
                            <div class="grid grid-cols-2 gap-3 mt-2">
                                <div class="">
                                    <label for="" class="block">Title</label>
                                    <input type="text" name="title" id=""
                                        class="p-1 bg-gray-100 focus:border-s-2 focus:outline-none focus:border-s-blue-700 w-full mt-2"
                                        value="{{ old('title') }}">
                                    @error('title')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="">
                                    <label for="" class="block">Type</label>
                                    <select name="type" id="jobTypeFilter"
                                        class="p-1 outline-none w-full bg-gray-100 focus:border-s-2 focus:outline-none focus:border-s-blue-700 mt-2">
                                        <option value="">(All Types)</option>
                                        <option value="fullTime" {{ old('type') === 'fullTime' ? 'selected' : '' }}>Full
                                            Time</option>
                                        <option value="partTime" {{ old('type') === 'partTime' ? 'selected' : '' }}>Part
                                            Time</option>
                                        <option value="contract" {{ old('type') === 'contract' ? 'selected' : '' }}>
                                            Contract</option>
                                        <option value="internship" {{ old('type') === 'internship' ? 'selected' : '' }}>
                                            Internship</option>
                                    </select>
                                    @error('type')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="">
                                    <label for="" class="block">Level</label>
                                    <select name="level" id="experienceLevelFilter"
                                        class="p-1 outline-none w-full bg-gray-100 focus:border-s-2 focus:outline-none focus:border-s-blue-700 mt-2">
                                        <option value="">(All Levels)</option>
                                        <option value="noExperience"
                                            {{ old('level') === 'noExperience' ? 'selected' : '' }}>No experience</option>
                                        <option value="internshipAndGraduate"
                                            {{ old('level') === 'internshipAndGraduate' ? 'selected' : '' }}>Internship and
                                            Graduate</option>
                                        <option value="entryLevel" {{ old('level') === 'entryLevel' ? 'selected' : '' }}>
                                            Entry Level</option>
                                        <option value="midLevel" {{ old('level') === 'midLevel' ? 'selected' : '' }}>Mid
                                            Level</option>
                                        <option value="seniorLevel"
                                            {{ old('level') === 'seniorLevel' ? 'selected' : '' }}>Senior Level</option>
                                        <option value="executive" {{ old('level') === 'executive' ? 'selected' : '' }}>
                                            Executive</option>
                                    </select>
                                    @error('level')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="">
                                    <label for="" class="block">Tags (comma seperated)</label>
                                    <input type="text" name="tags" id=""
                                        class="p-1 bg-gray-100 focus:border-s-2 focus:outline-none focus:border-s-blue-700 w-full mt-2"
                                        placeholder="(max of 5)" value="{{ old('tags') }}">
                                    @error('tags')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                    {{-- todo - use js to show seperated tags as user type --}}
                                </div>
                            </div>
                            <div class="block mt-5">
                                <label for="" class="block">Summary</label>
                                <input type="text" name="summary" id=""
                                    class="p-1 bg-gray-100 focus:border-s-2 focus:outline-none focus:border-s-blue-700 w-full mt-2"
                                    value="{{ old('summary') }}">
                                @error('summary')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="block mt-5">
                                <label for="" class="block">Description</label>
                                <textarea name="description" id="description" cols="30" rows="10"
                                    class="w-full resize-y bg-gray-100 focus:border-s-2 focus:outline-none focus:border-s-blue-700 mt-2 p-1">{{ old('description') }}</textarea>
                                @error('description')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </fieldset>

                        <button type="submit" id="createJobListing" name="createJobListing"
                            class="block w-full bg-blue-700 text-white hover:bg-gray-700 mt-6 py-2">Submit</button>
                </form>
            </div>
        </main>
    </div>

    {{-- using the local scripts --}}
    <script src="{{ asset('/assets/scripts/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('/assets/scripts/typeahead.bundle.min.js') }}"></script>
    <script src="{{ asset('/assets/scripts/popper.min.js') }}"></script>


    {{-- richtext editor --}}
    {{-- <script src="{{ asset('/assets/richtexteditor/rte.js') }}"></script>
    <script src="{{ asset('/assets/richtexteditor/plugins/all_plugins.js') }}"></script> --}}
    <script>
        // var editor1 = new RichTextEditor("#description", {
        //     editorResizeMode: "height",
        //     // editorWidth: 100%,
        // });

        $(document).ready(function() {
            ////////////////////////// display selected image
            $('#cameraUpload').on('click', function() {
                $('#logo').trigger('click');
            });
            
            $('#logo').on('change', function(event) {
                var selectedImageFile = event.target.files[0];
                if (selectedImageFile) {
                    var imageObjectURL = URL.createObjectURL(selectedImageFile);
                    $('#companyLogo').attr('src', imageObjectURL);
                    $('#logo').val(imageObjectURL);
                }
            });
            ////////////////////////// display selected image


            ///////////////////////////// Listen for the change event on the "Remote" checkbox
            $('#remote_location').change(function() {
               // Check if the checkbox is checked
                if ($(this).is(':checked')) {
                   // If checked, disable the text input and set its value to 'remote'
                    $('input[name="location"]').prop('disabled', true).val('Remote');
                } else {
                   // If not checked, enable the text input and set its value to an empty string
                    $('input[name="location"]').prop('disabled', false).val('');
                }
            });

            // // Get references to the elements
            // var locationField = $('#locationField');
            // var remoteCheckbox = $('#remote_location');

            // // Set the initial state based on the checkbox
            // locationField.prop('disabled', remoteCheckbox.is(':checked'));

            // // Attach a change event listener to the checkbox
            // remoteCheckbox.change(function() {
            //     // Update the location field based on the checkbox state
            //     locationField.prop('disabled', $(this).is(':checked'));

            //     // If it's checked, set the location value to 'remote'
            //     if ($(this).is(':checked')) {
            //         locationField.val('Remote');
            //     } else {
            //         // If it's unchecked, reset to the old value or an empty string
            //         locationField.val('{{ old('location') ?? '' }}');
            //     }
            // });

        });
    </script>

    {{-- <!-- tiny editor --> --}}
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
	<script>
		tinymce.init({
			selector: 'textarea#description',
			plugins: [
				'a11ychecker', 'advlist', 'advcode', 'advtable', 'autolink', 'checklist', 'export',
				'lists', 'link', 'image', 'charmap', 'preview', 'anchor', 'searchreplace', 'visualblocks',
				'powerpaste', 'fullscreen', 'formatpainter', 'insertdatetime', 'media', 'table', 'help', 'wordcount'
			],
			toolbar: 'undo redo | a11ycheck casechange blocks | bold italic backcolor | alignleft aligncenter alignright alignjustify |' +
				'bullist numlist checklist outdent indent | removeformat | code table help'
		})
	</script>
@endsection
