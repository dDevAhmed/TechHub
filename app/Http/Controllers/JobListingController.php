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
        $jobListings = DB::table('job_listings')
            ->where('is_active', 1)->get()->sortDesc();

        return view('job-listings', [
            'jobListings' => $jobListings
            // 'jobListings' => JobListing::all()->sortDesc()
            // DB::table('job_listings')->paginate(20)       //paginate records to 20
        ]);
    }

    // show single listing
    public function showJobListing($job_id)
    {
        // $jobListing = JobListing::find($id);     //using the id column
        $jobListing = DB::table('job_listings')
            ->where('job_id', $job_id)->first();

        return view('job-listing', [
            'jobListing' => $jobListing
        ]);
    }

    // show add listing form
    public function createJobListing()
    {
        return view('add-job-listing');
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
