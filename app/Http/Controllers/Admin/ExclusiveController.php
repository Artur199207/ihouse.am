<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\ExclusiveFormRequest;
use App\Models\Exclusive;

class ExclusiveController extends Controller
{
    public function index()
    {
        $exclusive = Exclusive::all();
        return view("admin.exclusive.index", compact("exclusive"));
    }
    public function create()
    {
        return view("admin.exclusive.create");
    }
    public function store(ExclusiveFormRequest $request)
    {
        $data = $request->validated();
        $request->validate([
            'name' => 'required|string',
            'image1.*' => 'image|mimes:jpeg,png,jpg,gif|max:350000', // Validate each image file
            // Add more validation rules as needed
        ]);
        $exclusive = new Exclusive;
        $exclusive->name = $data['name'] ?? null;
        $exclusive->name1 = $data['name1'] ?? null;
        $exclusive->name2 = $data['name2'] ?? null;
        $exclusive->name3 = $data['name3'] ?? null;
        $exclusive->name4 = $data['name4'] ?? null;
        $exclusive->name5 = $data['name5'] ?? null;
        $exclusive->name6 = $data['name6'] ?? null;
        $exclusive->name7 = $data['name7'] ?? null;
        $exclusive->name8 = $data['name8'] ?? null;
        $exclusive->name9 = $data['name9'] ?? null;
        $exclusive->name10 = $data['name10'] ?? null;
        $exclusive->des = $data['des'] ?? null;
        $exclusive->name11 = $data['name11'] ?? null;
        $exclusive->name12 = $data['name12'] ?? null;
        $exclusive->name13 = $data['name13'] ?? null;
        $exclusive->name14 = $data['name14'] ?? null;
        $exclusive->name15 = $data['name15'] ?? null;
        $exclusive->name16 = $data['name16'] ?? null;
        $exclusive->name17 = $data['name17'] ?? null;
        $exclusive->name18 = $data['name18'] ?? null;
        $exclusive->name19 = $data['name19'] ?? null;
        $exclusive->name202 = $data['name202'] ?? null;
        $exclusive->name21 = $data['name21'] ?? null;
        $exclusive->name22 = $data['name22'] ?? null;
        $exclusive->name23 = $data['name23'] ?? null;
        $exclusive->name24 = $data['name24'] ?? null;
        $exclusive->slug = $data['slug'] ?? null;
        $exclusive->slug1 = $data['slug1'] ?? null;
        $exclusive->description = $data['description'];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/category/'), $filename);
            $exclusive->image = $filename;
        }
        if ($request->hasFile('image1')) {
            $imagePaths = [];
            foreach ($request->file('image1') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/category/'), $filename);
                $imagePaths[] = 'uploads/category/' . $filename; // Store path or filename in array
            }
            $exclusive->image1 = json_encode($imagePaths); // Store as JSON-encoded string in database
        }
        $exclusive->meta_title = $data['meta_title'] ?? null;
        $exclusive->meta_description = $data['meta_description'] ?? null;
        $exclusive->meta_keywords = $data['meta_keywords'] ?? null;
        $exclusive->save();

        return redirect('admin/exclusive')->with('message', 'Կատեգորիան հաջողությամբ ավելացվեց');
    }
    public function edit($category_id)
    {
        $exclusive = Exclusive::find($category_id);
        return view('admin.exclusive.edit', compact('exclusive'));
    }
    public function update(ExclusiveFormRequest $request, $category_id)
    {
        $data = $request->validated();
        $request->validate([
            'name' => 'required|string',
            'image1.*' => 'image|mimes:jpeg,png,jpg,gif|max:350000', // Validate each image file
            // Add more validation rules as needed
        ]);
        $exclusive =  Exclusive::find($category_id);
        $exclusive->name = $data['name'] ?? null;
        $exclusive->name1 = $data['name1'] ?? null;
        $exclusive->name2 = $data['name2'] ?? null;
        $exclusive->name3 = $data['name3'] ?? null;
        $exclusive->name4 = $data['name4'] ?? null;
        $exclusive->name5 = $data['name5'] ?? null;
        $exclusive->name6 = $data['name6'] ?? null;
        $exclusive->name7 = $data['name7'] ?? null;
        $exclusive->name8 = $data['name8'] ?? null;
        $exclusive->name9 = $data['name9'] ?? null;
        $exclusive->name10 = $data['name10'] ?? null;
        $exclusive->des = $data['des'] ?? null;
        $exclusive->name11 = $data['name11'] ?? null;
        $exclusive->name12 = $data['name12'] ?? null;
        $exclusive->name13 = $data['name13'] ?? null;
        $exclusive->name14 = $data['name14'] ?? null;
        $exclusive->name15 = $data['name15'] ?? null;
        $exclusive->name16 = $data['name16'] ?? null;
        $exclusive->name17 = $data['name17'] ?? null;
        $exclusive->name18 = $data['name18'] ?? null;
        $exclusive->name19 = $data['name19'] ?? null;
        $exclusive->name202 = $data['name202'] ?? null;
        $exclusive->name21 = $data['name21'] ?? null;
        $exclusive->name22 = $data['name22'] ?? null;
        $exclusive->name23 = $data['name23'] ?? null;
        $exclusive->name24 = $data['name24'] ?? null;
        $exclusive->slug = $data['slug'] ?? null;
        $exclusive->slug1 = $data['slug1'] ?? null;
        $exclusive->description = $data['description'];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/category/'), $filename);
            $exclusive->image = $filename;
        }
        if ($request->hasFile('image1')) {
            $imagePaths = [];
            foreach ($request->file('image1') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/category/'), $filename);
                $imagePaths[] = 'uploads/category/' . $filename; // Store path or filename in array
            }
            $exclusive->image1 = json_encode($imagePaths); // Store as JSON-encoded string in database
        }
        $exclusive->meta_title = $data['meta_title'] ?? null;
        $exclusive->meta_description = $data['meta_description'] ?? null;
        $exclusive->meta_keywords = $data['meta_keywords'] ?? null;
        $exclusive->update();

        return redirect('admin/exclusive')->with('message', 'Կատեգորիան հաջողությամբ ավելացվեց');
    }
    public  function destroy($category_id)
    {
        $exclusive = Exclusive::find($category_id);

        if ($exclusive) {
            

            $exclusive->delete();
            return redirect('admin/exclusive')->with('message', 'Կատեգորիան հաջողությամբ ջնջվեց');
        } else {
            return redirect('admin/exclusive')->with('message', 'Կատեգորիան չի գտնվել');
        }
    }
}
