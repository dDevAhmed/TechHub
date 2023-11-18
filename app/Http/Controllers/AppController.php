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

    public function search(){
        return view('search');
    }

}
