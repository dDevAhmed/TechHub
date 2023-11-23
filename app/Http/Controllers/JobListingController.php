<?php

namespace App\Http\Controllers;

use App\Models\JobListing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobListingController extends Controller
{

    // resource routes
    // index    all listings
    // show     single listing
    // create   new listing form
    // store    add new listing to db
    // edit     update listing form
    // update   save new listing update
    // destroy  danger zone (delete listing)

    // show all listings
    public function index()
    {
        $jobListings = JobListing::orderBy('created_at', 'desc')
        ->where('is_active', 1)
        ->paginate(10);

        // Get the current page number
        $currentPage = $jobListings->currentPage();

        return view('joblistings.listings', [
            'jobListings' => $jobListings,
            'currentPage' => $currentPage
        ]);
    }

    // show single listing
    public function showJobListing($job_id)
    {
        // $jobListing = JobListing::find($id);     //using the id column
        $jobListing = DB::table('job_listings')
            ->where('job_id', $job_id)->first();

        return view('joblistings.listing', [
            'jobListing' => $jobListing
        ]);
    }

    // show add listing form
    public function createJobListing()
    {
        return view('joblistings.create');
    }

    // store new listing in db
    public function storeJobListing(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'tags' => 'required',
            'company' => 'required',
            'location' => 'required',
            'email' => 'required',
            'website' => 'required',
        ]);

        JobListing::create($request->all());
        return to_route('job.index');
    }

    // update listing form
    public function editJobListing(Request $request)
    {
        // Listing::create();
    }

    // save new listing update
    public function updateJobListing(Request $request)
    {
        // Listing::create();
    }

    // save new listing update
    public function destroyJobListing(Request $request)
    {
        // $listing = Listing::find(1);
        // $listing->delete();

        // $deletedListing = Listing::where('id', $this)->delete();
    }
}
