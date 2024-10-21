<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BannerFormRequest;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $banner = Banner::all();
        return view('admin.banner.index', compact('banner'));
    }
    public function create()
    {
        return view('admin.banner.create');
    }
    public function store(BannerFormRequest $request)
    {
        $data = $request->validated();
        $request->validate([
            'name' => 'required|string',
            'image1.*' => 'image|mimes:jpeg,png,jpg,gif|max:350000', // Validate each image file
            // Add more validation rules as needed
        ]);
        $banner = new Banner;
        $banner->name = $data['name'] ?? null;
        $banner->name1 = $data['name1'] ?? null;
        $banner->name2 = $data['name2'] ?? null;
        $banner->name3 = $data['name3'] ?? null;
        $banner->name4 = $data['name4'] ?? null;
        $banner->name5 = $data['name5'] ?? null;
        $banner->name6 = $data['name6'] ?? null;
        $banner->name7 = $data['name7'] ?? null;
        $banner->name8 = $data['name8'] ?? null;
        $banner->name9 = $data['name9'] ?? null;
        $banner->name10 = $data['name10'] ?? null;
        $banner->des = $data['des'] ?? null;
        $banner->name11 = $data['name11'] ?? null;
        $banner->name12 = $data['name12'] ?? null;
        $banner->name13 = $data['name13'] ?? null;
        $banner->name14 = $data['name14'] ?? null;
        $banner->name15 = $data['name15'] ?? null;
        $banner->name16 = $data['name16'] ?? null;
        $banner->name17 = $data['name17'] ?? null;
        $banner->name18 = $data['name18'] ?? null;
        $banner->name19 = $data['name19'] ?? null;
        $banner->name202 = $data['name202'] ?? null;
        $banner->name21 = $data['name21'] ?? null;
        $banner->name22 = $data['name22'] ?? null;
        $banner->name23 = $data['name23'] ?? null;
        $banner->name24 = $data['name24'] ?? null;
        $banner->slug = $data['slug'] ?? null;
        $banner->slug1 = $data['slug1'] ?? null;
        $banner->description = $data['description'];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/category/'), $filename);
            $banner->image = 'uploads/category/' . $filename; // Store the full relative path
        }
        
        if ($request->hasFile('image1')) {
            $imagePaths = [];
            foreach ($request->file('image1') as $file) {
                $filename = time() . '_' . pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/category/'), $filename);
                $imagePaths[] = 'uploads/category/' . $filename; // Store full relative path
            }
            $banner->image1 = json_encode($imagePaths); // Store as JSON-encoded string in the database
        }
        
        $banner->meta_title = $data['meta_title'] ?? null;
        $banner->meta_description = $data['meta_description'] ?? null;
        $banner->meta_keywords = $data['meta_keywords'] ?? null;
        $banner->save();

        return redirect('admin/banner')->with('message', 'Կատեգորիան հաջողությամբ ավելացվեց');
    }
    public function edit($category_id)
    {
        $banner = Banner::find($category_id);
        return view('admin.banner.edit', compact('banner'));
    }
    public function update(BannerFormRequest $request, $category_id)
    {
        $data = $request->validated();
        $request->validate([
            'name' => 'required|string',
            'image1.*' => 'image|mimes:jpeg,png,jpg,gif|max:350000', // Validate each image file
            // Add more validation rules as needed
        ]);
        $banner = Banner::find($category_id);
        $banner->name = $data['name'] ?? null;
        $banner->name1 = $data['name1'] ?? null;
        $banner->name2 = $data['name2'] ?? null;
        $banner->name3 = $data['name3'] ?? null;
        $banner->name4 = $data['name4'] ?? null;
        $banner->name5 = $data['name5'] ?? null;
        $banner->name6 = $data['name6'] ?? null;
        $banner->name7 = $data['name7'] ?? null;
        $banner->name8 = $data['name8'] ?? null;
        $banner->name9 = $data['name9'] ?? null;
        $banner->name10 = $data['name10'] ?? null;
        $banner->des = $data['des'] ?? null;
        $banner->name11 = $data['name11'] ?? null;
        $banner->name12 = $data['name12'] ?? null;
        $banner->name13 = $data['name13'] ?? null;
        $banner->name14 = $data['name14'] ?? null;
        $banner->name15 = $data['name15'] ?? null;
        $banner->name16 = $data['name16'] ?? null;
        $banner->name17 = $data['name17'] ?? null;
        $banner->name18 = $data['name18'] ?? null;
        $banner->name19 = $data['name19'] ?? null;
        $banner->name202 = $data['name202'] ?? null;
        $banner->name21 = $data['name21'] ?? null;
        $banner->name22 = $data['name22'] ?? null;
        $banner->name23 = $data['name23'] ?? null;
        $banner->name24 = $data['name24'] ?? null;
        $banner->slug = $data['slug'] ?? null;
        $banner->slug1 = $data['slug1'] ?? null;
        $banner->description = $data['description'];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/category/'), $filename);
            $banner->image = 'uploads/category/' . $filename; // Store the full relative path
        }
        
        if ($request->hasFile('image1')) {
            $imagePaths = [];
            foreach ($request->file('image1') as $file) {
                $filename = time() . '_' . pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/category/'), $filename);
                $imagePaths[] = 'uploads/category/' . $filename; // Store full relative path
            }
            $banner->image1 = json_encode($imagePaths); // Store as JSON-encoded string in the database
        }
        
        $banner->meta_title = $data['meta_title'] ?? null;
        $banner->meta_description = $data['meta_description'] ?? null;
        $banner->meta_keywords = $data['meta_keywords'] ?? null;
        $banner->save();

        return redirect('admin/banner')->with('message', 'Կատեգորիան հաջողությամբ ավելացվեց');
    }
    public  function destroy($category_id)
    {
        $banner = Banner::find($category_id);

        if ($banner) {
            

            $banner->delete();
            return redirect('admin/banner')->with('message', 'Կատեգորիան հաջողությամբ ջնջվեց');
        } else {
            return redirect('admin/banner')->with('message', 'Կատեգորիան չի գտնվել');
        }
    }
}
