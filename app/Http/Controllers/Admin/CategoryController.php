<?php

// namespace App\Http\Controllers\Admin;
// use Illuminate\Support\Facades\File;
// use App\Http\Controllers\Controller;
// use App\Models\Category;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use App\Http\Requests\Admin\CategoryFormRequest;
// class CategoryController extends Controller

// {
//     public function index()
//     {
//         $category = Category::all();
//         return view('admin.category.index', compact('category'));

//     }

//     public function create()
//     {
//         return view('admin.category.create');
//     }

//     public function store(CategoryFormRequest $request)
//     {

//         $data = $request->validated();

//         $category = new Category;
//         $category->name = $data['name'];
//         $category->slug = $data['slug'];
//         $category->description = $data['description'];

//         if ($request->hasFile('image')) {
//             try {
//                 $file = $request->file('image');
//                 $filename = time() . '.' . $file->getClientOriginalExtension();
//                 $file->move(public_path('uploads/category/'), $filename);
//                 $category->image = $filename;
//             } catch (\Exception $e) {
//                 return redirect()->back()->with('error', 'Failed to upload image: ' . $e->getMessage());
//             }
//         }

//         $category->meta_title = $data['meta_title'] ?? null;
//         $category->meta_description = $data['meta_description'] ?? null;
//         $category->meta_keywords = $data['meta_keywords'] ?? null;
//         $category->navbar_status = $request->has('navbar_status') ? '1' : '0';
//         $category->status = $request->has('status') ? '1' : '0';
//         $category->created_by = Auth::user()->id;
//         $category->save();

//         return redirect('admin/category')->with('message', 'Category added successfully');
//     }
//     public function edit($category_id)
//     {
//         $category = Category::find($category_id);
//         return view('admin.category.edit', compact('category'));
//     }

//     public function update(CategoryFormRequest $request,$category_id){
//         $data = $request->validated();

//         $category =  Category::find($category_id);
//         $category->name = $data['name'];
//         $category->slug = $data['slug'];
//         $category->description = $data['description'];

//         if ($request->hasFile('image')) {

// $destination = 'uploads/category/'.$category->image;
// if (File::exists($destination)) {
//     File::delete($destination);
// }



//             try {
//                 $file = $request->file('image');
//                 $filename = time() . '.' . $file->getClientOriginalExtension();
//                 $file->move(public_path('uploads/category/'), $filename);
//                 $category->image = $filename;
//             } catch (\Exception $e) {
//                 return redirect()->back()->with('error', 'Failed to upload image: ' . $e->getMessage());
//             }
//         }

//         $category->meta_title = $data['meta_title'] ?? null;
//         $category->meta_description = $data['meta_description'] ?? null;
//         $category->meta_keywords = $data['meta_keywords'] ?? null;
//         $category->navbar_status = $request->has('navbar_status') ? '1' : '0';
//         $category->status = $request->has('status') ? '1' : '0';
//         $category->created_by = Auth::user()->id;
//         $category->update();

//         return redirect('admin/category')->with('message', 'Կատեգորիան հաջողությամբ ավելացվեց');
//     }


//     public function destroy($category_id)
// {
//     $category = Category::find($category_id);

//     if ($category) {
//         // Construct the path to the image file
//         $destination = 'uploads/category/' . $category->image;

//         // Check if the file exists and delete it
//         if (File::exists($destination)) {
//             File::delete($destination);
//         }

//         // Delete the category record
//         $category->delete();

//         return redirect('admin/category')->with('message', 'Category deleted');
//     } else {
//         return redirect('admin/category')->with('error', 'Category not found');
//     }
// }



// }




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
        $category->name11 = $data['name11'] ?? null;
        $category->name12 = $data['name12'] ?? null;
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
            foreach ($request->file('image1') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/category/'), $filename);
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
}


