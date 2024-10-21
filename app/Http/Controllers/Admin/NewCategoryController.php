<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\NewCategoryFormRequest;
use Illuminate\Http\Request;
use App\Models\NewCategory;

class NewCategoryController extends Controller
{
    public function index()
    {
        $newcategory = NewCategory::all();  
        return view("admin.newcategory.index", compact("newcategory"));
    }
    public function create()
    {
        return view("admin.newcategory.create");
    }
    public function store(NewCategoryFormRequest $request)
    {
        $data = $request->validated();
        $newcategory = new NewCategory();

        
        $newcategory->name = $data['name'] ?? null;
        $newcategory->name1 = $data['name1'] ?? null;
        $newcategory->name2 = $data['name2'] ?? null;
        $newcategory->name3 = $data['name3'] ?? null;
        $newcategory->name4 = $data['name4'] ?? null;
        $newcategory->name5 = $data['name5'] ?? null;
        $newcategory->name6 = $data['name6'] ?? null;
        $newcategory->name7 = $data['name7'] ?? null;
        $newcategory->name8 = $data['name8'] ?? null;
        $newcategory->name9 = $data['name9'] ?? null;
        $newcategory->name10 = $data['name10'] ?? null;
        $newcategory->name11 = $data['name11'] ?? null;
        $newcategory->name12 = $data['name12'] ?? null;
        $newcategory->name13 = $data['name13'] ?? null;
        $newcategory->name14 = $data['name14'] ?? null;
        $newcategory->name15 = $data['name15'] ?? null;
        $newcategory->name16 = $data['name16'] ?? null;
        $newcategory->name17 = $data['name17'] ?? null;
        $newcategory->name18 = $data['name18'] ?? null;
        $newcategory->name19 = $data['name19'] ?? null;
        $newcategory->name20 = $data['name20'] ?? null;
        $newcategory->name21 = $data['name21'] ?? null;
        $newcategory->name22 = $data['name22'] ?? null;
        $newcategory->name23 = $data['name23'] ?? null;
        $newcategory->name24 = $data['name24'] ?? null;
        $newcategory->name25 = $data['name25'] ?? null;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/category/'), $filename);
            $newcategory->image = $filename;
        }

        if ($request->hasFile('image1')) {
            $imagePaths = [];
            foreach ($request->file('image1') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/category/'), $filename);
                $imagePaths[] = 'uploads/category/' . $filename;
            }
            $newcategory->image1 = json_encode($imagePaths);
        }

        $newcategory->save();
        return redirect('admin/newcategory')->with('message', 'Կատեգորիան հաջողությամբ ավելացվեց');
    }

    public function edit($category_id)
    {
        $newcategory = NewCategory::find($category_id);
        return view('admin.newcategory.edit', compact('newcategory'));
    }

    public function update(NewCategoryFormRequest $request, $category_id)
    {
        $data = $request->validated();
        $newcategory = NewCategory::findOrFail( $category_id );

        
        $newcategory->name = $data['name'] ?? null;
        $newcategory->name1 = $data['name1'] ?? null;
        $newcategory->name2 = $data['name2'] ?? null;
        $newcategory->name3 = $data['name3'] ?? null;
        $newcategory->name4 = $data['name4'] ?? null;
        $newcategory->name5 = $data['name5'] ?? null;
        $newcategory->name6 = $data['name6'] ?? null;
        $newcategory->name7 = $data['name7'] ?? null;
        $newcategory->name8 = $data['name8'] ?? null;
        $newcategory->name9 = $data['name9'] ?? null;
        $newcategory->name10 = $data['name10'] ?? null;
        $newcategory->name11 = $data['name11'] ?? null;
        $newcategory->name12 = $data['name12'] ?? null;
        $newcategory->name13 = $data['name13'] ?? null;
        $newcategory->name14 = $data['name14'] ?? null;
        $newcategory->name15 = $data['name15'] ?? null;
        $newcategory->name16 = $data['name16'] ?? null;
        $newcategory->name17 = $data['name17'] ?? null;
        $newcategory->name18 = $data['name18'] ?? null;
        $newcategory->name19 = $data['name19'] ?? null;
        $newcategory->name20 = $data['name20'] ?? null;
        $newcategory->name21 = $data['name21'] ?? null;
        $newcategory->name22 = $data['name22'] ?? null;
        $newcategory->name23 = $data['name23'] ?? null;
        $newcategory->name24 = $data['name24'] ?? null;
        $newcategory->name25 = $data['name25'] ?? null;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/category/'), $filename);
            $newcategory->image = $filename;
        }

        if ($request->hasFile('image1')) {
            $imagePaths = [];
            foreach ($request->file('image1') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/category/'), $filename);
                $imagePaths[] = 'uploads/category/' . $filename;
            }
            $newcategory->image1 = json_encode($imagePaths);
        }

        $newcategory->update();
        return redirect('admin/newcategory')->with('message', 'Կատեգորիան հաջողությամբ ավելացվեց');
    }

    public function destroy($category_id)
    {
        $newcategory = NewCategory::find($category_id);

        if ($newcategory) {
            

            $newcategory->delete();
            return redirect('admin/newcategory')->with('message', 'Կատեգորիան հաջողությամբ ջնջվեց');
        } else {
            return redirect('admin/newcategory')->with('message', 'Կատեգորիան չի գտնվել');
        }
    }
}
