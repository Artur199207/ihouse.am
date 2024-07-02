<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post1;
use App\Models\Category;
use App\Http\Requests\Admin\PostFormRequest;
use Illuminate\Support\Facades\Storage;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post1::all(); 
        return view('admin.post.index', compact('posts')); 
    }

    public function create()
    {
        $category = Category::where('status','0')->get();
        return view('admin.post.create',compact('category')); 
    }
    public function store(PostFormRequest $request)
    {
        $data = $request->validated();

        $post = new Post1;
        $post->building = $data['building'];
        $post->condition = $data['condition'];
        $post->types = $data['types'];
        $post->taxes = $data['taxes'];
        $post->living = $data['living'];
        $post->cars = $data['cars'];
        $post->bathrooms = $data['bathrooms'];
        $post->ceiling = $data['ceiling'];
        $post->old = $data['old'];
        $post->land = $data['land'];
        $post->repair = $data['repair'];
        $post->mony = $data['mony'];
        $post->change = $data['change'];
        $post->amenities = $data['amenities'];
        $post->communications = $data['communications'];
        $post->region = $data['region'];
        $post->appliances = $data['appliances'];
        $post->agent = $data['agent'];
        $post->desi = $data['desi'];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('images', $filename, 'public');
            $post->image = $filename;
        }

        if ($request->hasFile('image2')) {
            $file2 = $request->file('image2');
            $filename2 = time() . '.' . $file2->getClientOriginalExtension();
            $file2->storeAs('images', $filename2, 'public');
            $post->image2 = $filename2;
        }

        $post->save();

        return redirect('admin/posts')->with('message', 'Post added successfully');
    }
    public function update(Post1 $post, PostFormRequest $request)
{
    // Validate incoming request data
    $data = $request->validated();

    // Update the Post1 instance with validated data
    $post->building = $data['building'];
    $post->condition = $data['condition'];
    $post->types = $data['types'];
    $post->taxes = $data['taxes'];
    $post->living = $data['living'];
    $post->cars = $data['cars'];
    $post->bathrooms = $data['bathrooms'];
    $post->ceiling = $data['ceiling'];
    $post->old = $data['old'];
    $post->land = $data['land'];
    $post->repair = $data['repair'];
    $post->mony = $data['mony'];
    $post->change = $data['change'];
    $post->amenities = $data['amenities'];
    $post->communications = $data['communications'];
    $post->region = $data['region'];
    $post->appliances = $data['appliances'];
    $post->agent = $data['agent'];
    $post->desi = $data['desi'];

    // Handle main image update
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('images', $filename, 'public');
        $post->image = $filename;
    }

    // Handle additional images update (if any)
    if ($request->hasFile('image2')) {
        $file2 = $request->file('image2');
        $filename2 = time() . '.' . $file2->getClientOriginalExtension();
        $file2->storeAs('images', $filename2, 'public');
        $post->image2 = $filename2;
    }

    // Save the updated Post1 instance
    $post->save();

    // Redirect back with a success message
    return redirect('admin/posts')->with('message', 'Post updated successfully');
}

}