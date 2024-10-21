<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\CategoryFormRequest;
use Illuminate\Support\Facades\File;

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
        $request->validate([
            'name' => 'required|string',
            'image1.*' => 'image|mimes:jpeg,png,jpg,gif|max:350000', // Validate each image file
            // Add more validation rules as needed
        ]);
        $category = new Category;
        $category->name = $data['name'] ?? null;
        $category->name1 = $data['name1'] ?? null;
        $category->name2 = $data['name2'] ?? null;
        $category->name3 = $data['name3'] ?? null;
        $category->name4 = $data['name4'] ?? null;
        $category->name5 = $data['name5'] ?? null;
        $category->name6 = $data['name6'] ?? null;
        $category->name7 = $data['name7'] ?? null;
        $category->name8 = $data['name8'] ?? null;
        $category->name9 = $data['name9'] ?? null;
        $category->name10 = $data['name10'] ?? null;
        $category->des = $data['des'] ?? null;
        $category->name11 = $data['name11'] ?? null;
        $category->name12 = $data['name12'] ?? null;
        $category->name13 = $data['name13'] ?? null;
        $category->name14 = $data['name14'] ?? null;
        $category->name15 = $data['name15'] ?? null;
        $category->name16 = $data['name16'] ?? null;
        $category->name17 = $data['name17'] ?? null;
        $category->name18 = $data['name18'] ?? null;
        $category->name19 = $data['name19'] ?? null;
        $category->name202 = $data['name202'] ?? null;
        $category->name21 = $data['name21'] ?? null;
        $category->name22 = $data['name22'] ?? null;
        $category->name23 = $data['name23'] ?? null;
        $category->name24 = $data['name24'] ?? null;
        $category->slug = $data['slug'] ?? null;
        $category->slug1 = $data['slug1'] ?? null;
        $category->description = $data['description'];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/category/'), $filename);
            $category->image = $filename;
        }
        if ($request->hasFile('image1')) {
            $imagePaths = [];
            foreach ($request->file('image1') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/category/'), $filename);
                $imagePaths[] = 'uploads/category/' . $filename; // Store path or filename in array
            }
            $category->image1 = json_encode($imagePaths); // Store as JSON-encoded string in database
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

    public function update(CategoryFormRequest $request, $category_id)
    {
        $data = $request->validated();

        $category = Category::find($category_id);
        $category->name = $data['name'] ?? null;
        $category->name1 = $data['name1'] ?? null;
        $category->name2 = $data['name2'] ?? null;
        $category->name3 = $data['name3'] ?? null;
        $category->name4 = $data['name4'] ?? null;
        $category->name5 = $data['name5'] ?? null;
        $category->name6 = $data['name6'] ?? null;
        $category->name7 = $data['name7'] ?? null;
        $category->name8 = $data['name8'] ?? null;
        $category->name9 = $data['name9'] ?? null;
        $category->name10 = $data['name10'] ?? null;
        $category->name11 = $data['name11'] ?? null;
        $category->name12 = $data['name12'] ?? null;
        $category->name13 = $data['name13'] ?? null;
        $category->name14 = $data['name14'] ?? null;
        $category->name15 = $data['name15'] ?? null;
        $category->name16 = $data['name16'] ?? null;
        $category->name17 = $data['name17'] ?? null;
        $category->name18 = $data['name18'] ?? null;
        $category->name19 = $data['name19'] ?? null;
        $category->name202 = $data['name202'] ?? null;
        $category->name21 = $data['name21'] ?? null;
        $category->name22 = $data['name22'] ?? null;
        $category->name23 = $data['name23'] ?? null;
        $category->name24 = $data['name24'] ?? null;
        $category->des = $data['des'] ?? null;
        $category->slug = $data['slug'] ?? null;
        $category->slug1 = $data['slug1'] ?? null;
        $category->description = $data['description'];

        if ($request->hasFile('image')) {
            $destination = 'uploads/category/' . $category->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/category/'), $filename);
            $category->image = $filename;
        }

        if ($request->hasFile('image1')) {
            $imagePaths = [];
            foreach ($request->file('image1') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/category/'), $filename);
                $imagePaths[] = 'uploads/category/' . $filename; // Store path or filename in array
            }
            $category->image1 = json_encode($imagePaths); // Store as JSON-encoded string in database
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
            $destination = 'uploads/category/' . $category->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $category->delete();
            return redirect('admin/category')->with('message', 'Կատեգորիան հաջողությամբ ջնջվեց');
        } else {
            return redirect('admin/category')->with('message', 'Կատեգորիան չի գտնվել');
        }
    }



   protected function deleteImage($imagePath)
    {
        if (!empty($imagePath)) {
            $destination = public_path('uploads/category/') . $imagePath;
            if (File::exists($destination)) {
                File::delete($destination);
            }
        }
    }

    public function filter(Request $request)
    {
        $name = $request->input('name');
        $name1 = $request->input('name1');

        
        $query = Category::query();
        

        if ($name) {
            $query->where('name', $name);
        }

        if ($name1) {
            $query->where('name1', $name1);
        }

        $categories = $query->get();

        return view('frontend.index', [
            
            'categories' => $categories,
        ]);
    }

}


