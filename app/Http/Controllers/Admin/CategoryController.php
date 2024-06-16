<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\CategoryFormRequest;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index');
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
        $category->slug = $data['Slug'];
        $category->description = $data['Description'];
    
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
    
        $category->meta_title = $data['meta_title'];
        $category->meta_description = $data['meta_description'];
        $category->meta_keywords = $data['meta_keywords'];
        $category->navbar_status = $request->has('navbar_status') && $request->navbar_status ? '1' : '0';
        $category->status = $request->has('status') && $request->status ? '1' : '0';
        $category->created_by = Auth::user()->id;
        $category->save();
    
        return redirect('admin/category')->with('message', 'Կատեգորիան հաջողությամբ ավելացվեց');
    }
    
}
