<?php

namespace App\Http\Controllers;

use App\Models\JobListing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{
    // show welcome page
    // public function home()
    // {
    //     return view('home');
    // }

    public function home(Request $request)
    {
        // Check if AJAX request for search suggestions
        if ($request->ajax()) {
            $query = $request->get('query');

            // Perform database query to fetch suggestions based on the provided query
            $suggestions = DB::table('job_listings')
                ->where('title', 'like', '%' . $query . '%')
                ->select('title')
                ->limit(5)
                ->get()
                ->pluck('title');

            return [
                'suggestions' => $suggestions
            ];
        }

        // Render the home page view
        return view('home');
    }

    public function results(Request $request)
    {
        $searchTerm = $request->get('query');

        // Search job listings table
        $jobSearchResults = DB::table('job_listings')
            ->where('title', 'like', '%' . $searchTerm . '%')
            ->orWhere('description', 'like', '%' . $searchTerm . '%')
            ->get();

        // Search resources table
        $resourceSearchResults = DB::table('resources')
            ->where('title', 'like', '%' . $searchTerm . '%')
            // ->orWhere('description', 'like', '%' . $searchTerm . '%')    //todo - or where explode tags like
            ->orWhere('description', 'like', '%' . $searchTerm . '%')
            ->get();

        // Search communities table
        $communitySearchResults = DB::table('communities')
            ->where('title', 'like', '%' . $searchTerm . '%')
            ->orWhere('description', 'like', '%' . $searchTerm . '%')
            ->get();

        // Search blogs table
        $blogSearchResults = DB::table('blogs')
            ->where('title', 'like', '%' . $searchTerm . '%')
            ->orWhere('content', 'like', '%' . $searchTerm . '%')
            ->get();

        // Calculate counts for each table
        $jobSearchCount = $jobSearchResults->count();
        $resourceSearchCount = $resourceSearchResults->count();
        $communitySearchCount = $communitySearchResults->count();
        $blogSearchCount = $blogSearchResults->count();

        // Combine search results and counts into an array
        $searchResults = [
            'job_listings' => $jobSearchResults,
            'resources' => $resourceSearchResults,
            'communities' => $communitySearchResults,
            'blogs' => $blogSearchResults,
            'counts' => [
                'job_listings' => $jobSearchCount,
                'resources' => $resourceSearchCount,
                'communities' => $communitySearchCount,
                'blogs' => $blogSearchCount,
            ],
        ];

        // Return the view with search results and counts
        return view('results', [
            'searchResults' => $searchResults,
            'searchTerm' => $searchTerm,
        ]);
    }
}
