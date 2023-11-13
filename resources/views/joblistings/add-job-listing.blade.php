@extends('layout')

<div class="listing-detail-back-button-container">
    <a href="/" class="back-button"><i class="fa-solid fa-arrow-left"></i> Back</a>
</div>

@section('content')
    <div id="add-new-listing-div">
        <h3 class="text-center" id="add-listing-header">New Listing</h3>

        <form action="{{ route('listing.store') }}" method="post">
            @csrf
            <div class="form-row" id="image">
                <img src="{{ asset('/assets/img/laravel-logo.png') }}" alt="Listing Image" id="add-listing-image">
                <i class="fa-solid fa-camera" title="choose another image"></i>
                <input type="file" name="image" id="image">
            </div>
            <div class="form-row">
                <label for="title" class="form-row-label">Title</label>
                <input type="text" name="title" id="title">
            </div>
            <div class="form-row">
                <label for="tags" class="form-row-label">Tags (comma seperated)</label>
                <input type="text" name="tags" id="tags" placeholder="example: HTML, CSS, JavaScript">
            </div>
            <div class="form-row">
                <label for="company" class="form-row-label">Company</label>
                <input type="text" name="company" id="company">
            </div>
            <div class="form-row">
                <label for="location" class="form-row-label">Location</label>
                <input type="text" name="location" id="location">
            </div>
            <div class="form-row">
                <label for="email" class="form-row-label">Email</label>
                <input type="email" name="email" id="email" placeholder="you@example.com">
            </div>
            <div class="form-row">
                <label for="title" class="form-row-label">URL</label>
                <input type="text" name="website" id="website" placeholder="https://www.yourcompany.com">
            </div>
            <div class="form-row">
                <label for="title" class="form-row-label">Description</label>
                <textarea name="description" cols="30" rows="10" placeholder="describe your listing..."></textarea>
            </div>

            <button type="submit" id="add-new-listing-btn"><i class="fa-solid fa-add"></i> Add Listing</button>
        </form>
    </div>
@endsection
