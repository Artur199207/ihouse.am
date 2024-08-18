<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Categ;

class FrontendController extends Controller
{
   public function index(){

      $categs = [];
      $categories = [];


      If(!count(request()->all()))
      {
         $categories = Category::all();
    $categs = Categ::all(); // 
      }
      
      return view('frontend.index', [
         'categs' => $categs,
         'categories' => $categories,
     ]);


   //    return view('frontend.index', [
            
   //       'categories' => $categories,
   //   ]);
   
   }

   public function viewCategoryPost($category_slug){
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
          return redirect('/');
      }
}
public function viewCategPost($name100){
   $categ = Categ::where('name100', $name100)
                 ->where('status', '0')
                 ->first();

   if ($categ) {
       $posts = Post::where('categ_id', $categ->id)
                    ->where('status', '0')
                    ->get();

       return view('frontend.post.index', [
           'categ' => $categ,
           'posts' => $posts,
       ]);
   } else {
       return redirect('/');
   }
}

}
