<?php

namespace App\Http\Controllers;

use App\Models\Listing; // Correct namespace import

class ListingController extends Controller
{
    public function index()
    {
        $listings = Listing::all(); 

        return view('listings.index', compact('listings'));
    }
}

