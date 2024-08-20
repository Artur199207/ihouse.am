<?php

// app/Http/Controllers/FrontendController.php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;

class FrontendController extends Controller
{
    public function index()
    {
        // Fetch all posts or adjust the query as needed
        $posts = Post::all(); // or Post::latest()->get();

        // Pass the $posts variable to the view
        return view('frontend.index', compact('posts'));
    }
}

