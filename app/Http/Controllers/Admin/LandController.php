<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LandFormRequest;
use Illuminate\Http\Request;
use App\Models\Land;
class LandController extends Controller
{
    public function index()
    {
        $land = Land::all();
        return view("admin.land.index", compact("land"));
    }
    public  function create()
    {
        return view('admin.land.create');
    }
    public function store(LandFormRequest $request)
    {
        $data = $request->validated();
        $request->validate([
            'name' => 'required|string',
            'image1.*' => 'image|mimes:jpeg,png,jpg,gif|max:350000', // Validate each image file
            // Add more validation rules as needed
        ]);
        $land = new Land;
        $land->name = $data['name'] ?? null;
        $land->name1 = $data['name1'] ?? null;
        $land->name2 = $data['name2'] ?? null;
        $land->name3 = $data['name3'] ?? null;
        $land->name4 = $data['name4'] ?? null;
        $land->name5 = $data['name5'] ?? null;
        $land->name6 = $data['name6'] ?? null;
        $land->name7 = $data['name7'] ?? null;
        $land->name8 = $data['name8'] ?? null;
        $land->name9 = $data['name9'] ?? null;
        $land->name10 = $data['name10'] ?? null;
        $land->des = $data['des'] ?? null;
        $land->name11 = $data['name11'] ?? null;
        $land->name12 = $data['name12'] ?? null;
        $land->name13 = $data['name13'] ?? null;
        $land->name14 = $data['name14'] ?? null;
        $land->name15 = $data['name15'] ?? null;
        $land->name16 = $data['name16'] ?? null;
        $land->name17 = $data['name17'] ?? null;
        $land->name18 = $data['name18'] ?? null;
        $land->name19 = $data['name19'] ?? null;
        $land->name202 = $data['name202'] ?? null;
        $land->name21 = $data['name21'] ?? null;
        $land->name22 = $data['name22'] ?? null;
        $land->name23 = $data['name23'] ?? null;
        $land->name24 = $data['name24'] ?? null;
        $land->slug = $data['slug'] ?? null;
        $land->slug1 = $data['slug1'] ?? null;
        $land->description = $data['description'];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/category/'), $filename);
            $land->image = $filename;
        }
        if ($request->hasFile('image1')) {
            $imagePaths = [];
            foreach ($request->file('image1') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/category/'), $filename);
                $imagePaths[] = 'uploads/category/' . $filename; // Store path or filename in array
            }
            $land->image1 = json_encode($imagePaths); // Store as JSON-encoded string in database
        }
        $land->meta_title = $data['meta_title'] ?? null;
        $land->meta_description = $data['meta_description'] ?? null;
        $land->meta_keywords = $data['meta_keywords'] ?? null;
        $land->save();

        return redirect('admin/land')->with('message', 'Կատեգորիան հաջողությամբ ավելացվեց');
    }
    public function edit($category_id)
    {
        $land = Land::find($category_id);
        return view('admin.land.edit', compact( 'land'));
    }
    
    public function update(LandFormRequest $request, $category_id)
    {
        $data = $request->validated();
        $request->validate([
            'name' => 'required|string',
            'image1.*' => 'image|mimes:jpeg,png,jpg,gif|max:350000', // Validate each image file
            // Add more validation rules as needed
        ]);
        $land = Land::find($category_id);;
        $land->name = $data['name'] ?? null;
        $land->name1 = $data['name1'] ?? null;
        $land->name2 = $data['name2'] ?? null;
        $land->name3 = $data['name3'] ?? null;
        $land->name4 = $data['name4'] ?? null;
        $land->name5 = $data['name5'] ?? null;
        $land->name6 = $data['name6'] ?? null;
        $land->name7 = $data['name7'] ?? null;
        $land->name8 = $data['name8'] ?? null;
        $land->name9 = $data['name9'] ?? null;
        $land->name10 = $data['name10'] ?? null;
        $land->des = $data['des'] ?? null;
        $land->name11 = $data['name11'] ?? null;
        $land->name12 = $data['name12'] ?? null;
        $land->name13 = $data['name13'] ?? null;
        $land->name14 = $data['name14'] ?? null;
        $land->name15 = $data['name15'] ?? null;
        $land->name16 = $data['name16'] ?? null;
        $land->name17 = $data['name17'] ?? null;
        $land->name18 = $data['name18'] ?? null;
        $land->name19 = $data['name19'] ?? null;
        $land->name202 = $data['name202'] ?? null;
        $land->name21 = $data['name21'] ?? null;
        $land->name22 = $data['name22'] ?? null;
        $land->name23 = $data['name23'] ?? null;
        $land->name24 = $data['name24'] ?? null;
        $land->slug = $data['slug'] ?? null;
        $land->slug1 = $data['slug1'] ?? null;
        $land->description = $data['description'];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/category/'), $filename);
            $land->image = $filename;
        }
        if ($request->hasFile('image1')) {
            $imagePaths = [];
            foreach ($request->file('image1') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/category/'), $filename);
                $imagePaths[] = 'uploads/category/' . $filename; // Store path or filename in array
            }
            $land->image1 = json_encode($imagePaths); // Store as JSON-encoded string in database
        }
        $land->meta_title = $data['meta_title'] ?? null;
        $land->meta_description = $data['meta_description'] ?? null;
        $land->meta_keywords = $data['meta_keywords'] ?? null;
        $land->save();

        return redirect('admin/land')->with('message', 'Կատեգորիան հաջողությամբ ավելացվեց');
    }

    public  function destroy($category_id)
    {
        $land = Land::find($category_id);

        if ($land) {
            

            $land->delete();
            return redirect('admin/land')->with('message', 'Կատեգորիան հաջողությամբ ջնջվեց');
        } else {
            return redirect('admin/land')->with('message', 'Կատեգորիան չի գտնվել');
        }
    }
}
