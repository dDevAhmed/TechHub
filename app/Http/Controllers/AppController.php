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

        // Perform database query to fetch results based on the search term
        $searchResults = DB::table('job_listings')
            ->where('title', 'like', '%' . $searchTerm . '%')
            ->get();
        // ->orWhere('description', 'like', '%' . $searchTerm . '%')

        return view('results', [
            'searchResults' => $searchResults, 
            'searchTerm' => $searchTerm,
            // 'counts' => $searchResults->counts()
        ]);
    }
}
