<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Land;
use App\Models\NewCategory;
use App\Models\Listing;
use Illuminate\Http\Request;
use App\Models\Post;
class ListingController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(2);

        $listings = Listing::where('availability', 'Y')
            ->orderBy('title')
            ->paginate(100);

        $newcategory = NewCategory::paginate(2);
        $land = Land::paginate(2);

        // Retorna la vista con los datos necesarios
        return view('listings.index', compact('categories', 'listings', 'newcategory','land'));
    }


    public function show($id)
    {
        // Encuentra la categoría por ID
        $newcategory = NewCategory::find($id);
    
        if ($newcategory) {
            $posts = Post::where('category_id', $newcategory->id) // Usa 'newcategory_id'
                ->get();

            return view('frontend.newpost.index', [
                'newcategory' => $newcategory, // Pasa la categoría a la vista
                'posts' => $posts, // Pasa los posts a la vista
            ]);
        } else {
            // Redirige con un mensaje de error si la categoría no se encuentra
            return redirect('/')->with('error', 'Category not found.');
        }
    }

    public function showLand($id)
    {
        // Encuentra la categoría por ID
        $land = land::find($id);
    
        if ($land) {
            $posts = Post::where('category_id', $land->id) // Usa 'newcategory_id'
                ->get();

            return view('frontend.land.index', [
                'land' => $land, // Pasa la categoría a la vista
                'posts' => $posts, // Pasa los posts a la vista
            ]);
        } else {
            // Redirige con un mensaje de error si la categoría no se encuentra
            return redirect('/')->with('error', 'Category not found.');
        }
    }

    
}
