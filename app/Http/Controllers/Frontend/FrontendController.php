<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Exclusive;
use App\Models\Land;
use App\Models\NewCategory;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Categ;

class FrontendController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $categs = Categ::all();
        $exclusive = Exclusive::all();
        $land = Land::all();
        $banner = Banner::all();

        return view('frontend.index', [
            'categs' => $categs,
            'categories' => $categories,
            'exclusive' => $exclusive,
            'land' => $land,
            'banner' => $banner,
        ]);
    }

    public function viewCategoryPost($category_slug)
    {
        $category = Category::where('slug', $category_slug)
            ->where('status', '0')
            ->first();

        if ($category) {
            $posts = Post::where('category_id', $category->id)
                ->where('status', '0')
                ->get();

            return view('frontend.post.index', [
                'category' => $category,
                'posts' => $posts,
            ]);
        } else {
            return redirect('/')->with('error', 'Category not found.');
        }
    }

    public function viewCategoryPostExclusive($category_slug)
    {
        $exclusive = Exclusive::where('slug', $category_slug)->first();

        if ($exclusive) {
            $posts = Post::where('category_id', $exclusive->id)->get();

            return view('frontend.exclusive.index', [
                'exclusive' => $exclusive,
                'posts' => $posts,
            ]);
        } else {
            return redirect('/')->with('error', 'Exclusive item not found.');
        }
    }

    public function viewCategoryPostLand($category_slug)
    {
        $land = Land::where('slug', $category_slug)->first();

        if ($land) {
            $posts = Post::where('category_id', $land->id)->get();
         
            return view('frontend.land.index', [
               
                'land' => $land,
                'posts' => $posts,
            ]);
        } else {
            return redirect('/')->with('error', 'Exclusive item not found.');
        }
    }
    
    

    public function newcategory()
    {
        $newcategory = NewCategory::all();

        return view('listings.index', compact('newcategory'));
    }


    public function viewBanner($id)
{
    $banner = Banner::findOrFail($id); // Fetch the banner by ID

    return view('frontend.banner.index', compact('banner')); // Return the view with the banner data
}

}

