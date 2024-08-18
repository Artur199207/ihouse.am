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

      $categs = Categ::all(); // Retrieve all categs
      $categories = [];


      If(!count(request()->all()))
      {
         $categories = Category::all();
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
      $category = Category::where('slug', $category_slug)->where('status','0')->first();
      if ($category) {
         
         $post = Post::where('category_id',$category->id)->where('status','0')->get();
         return view('frontend.post.index',['category'=>$category]);
     }else{
      return redirect('/');
     }
   }
}
