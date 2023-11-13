<?php

namespace App\Http\Controllers;

use App\Models\JobListing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{
    // show welcome page
    public function home()
    {
        return view('home');
    }


    public function liveSearch(Request $request)
    {
        $query = $request->get('query');

        // Perform your search logic here
        $results = JobListing::where('title', 'like', '%' . $query . '%')->get();

        return response()->json($results);
    }
}
