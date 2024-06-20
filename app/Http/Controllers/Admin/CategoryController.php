<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\CategoryFormRequest;
class CategoryController extends Controller

{
    public function index()
    {
        $category = Category::all();
        return view('admin.category.index', compact('category'));
        
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(CategoryFormRequest $request)
    {
        
        $data = $request->validated();

        $category = new Category;
        $category->name = $data['name'];
        $category->slug = $data['slug'];
        $category->description = $data['description'];

        if ($request->hasFile('image')) {
            try {
                $file = $request->file('image');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/category/'), $filename);
                $category->image = $filename;
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Failed to upload image: ' . $e->getMessage());
            }
        }

        $category->meta_title = $data['meta_title'] ?? null;
        $category->meta_description = $data['meta_description'] ?? null;
        $category->meta_keywords = $data['meta_keywords'] ?? null;
        $category->navbar_status = $request->has('navbar_status') ? '1' : '0';
        $category->status = $request->has('status') ? '1' : '0';
        $category->created_by = Auth::user()->id;
        $category->save();

        return redirect('admin/category')->with('message', 'Category added successfully');
    }
    public function edit($category_id)
    {
        $category = Category::find($category_id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(CategoryFormRequest $request,$category_id){
        $data = $request->validated();

        $category =  Category::find($category_id);
        $category->name = $data['name'];
        $category->slug = $data['slug'];
        $category->description = $data['description'];

        if ($request->hasFile('image')) {

$destination = 'uploads/category/'.$category->image;
if (File::exists($destination)) {
    File::delete($destination);
}



            try {
                $file = $request->file('image');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/category/'), $filename);
                $category->image = $filename;
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Failed to upload image: ' . $e->getMessage());
            }
        }

        $category->meta_title = $data['meta_title'] ?? null;
        $category->meta_description = $data['meta_description'] ?? null;
        $category->meta_keywords = $data['meta_keywords'] ?? null;
        $category->navbar_status = $request->has('navbar_status') ? '1' : '0';
        $category->status = $request->has('status') ? '1' : '0';
        $category->created_by = Auth::user()->id;
        $category->update();

        return redirect('admin/category')->with('message', 'Կատեգորիան հաջողությամբ ավելացվեց');
    }


    public function destroy($category_id)
{
    $category = Category::find($category_id);

    if ($category) {
        // Construct the path to the image file
        $destination = 'uploads/category/' . $category->image;

        // Check if the file exists and delete it
        if (File::exists($destination)) {
            File::delete($destination);
        }

        // Delete the category record
        $category->delete();

        return redirect('admin/category')->with('message', 'Category deleted');
    } else {
        return redirect('admin/category')->with('error', 'Category not found');
    }
}

    
    
}
