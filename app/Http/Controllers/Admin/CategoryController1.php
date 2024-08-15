<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\CategoryFormRequest1;
use App\Models\Category;

class CategoryController1 extends Controller
{
    public function index()
    {
        
        return view('admin.apartment.index');
    }
    public function create()
    {
        
        return view('admin.apartment.create');
    }
    public function store(CategoryFormRequest1 $request)
    {
        $data = $request->validated();
        $request->validate([
            'name100' => 'required|string',
            'image001.*' => 'image|mimes:jpeg,png,jpg,gif|max:350000', 
            'description' => 'nullable|string',
        
        ]);
        $categ = new Category;
        $categ->name100 = $data['name100'] ?? null;
        $categ->name101 = $data['name101'] ?? null;
        $categ->name102 = $data['name102'] ?? null;
        $categ->name103 = $data['name103'] ?? null;
        $categ->name104 = $data['name104'] ?? null;
        $categ->name105 = $data['name105'] ?? null;
        $categ->name106 = $data['name106'] ?? null;
        $categ->name107 = $data['name107'] ?? null;
        $categ->name108 = $data['name108'] ?? null;
        $categ->name109 = $data['name109'] ?? null;
        $categ->name110 = $data['name110'] ?? null;
        $categ->name111 = $data['name111'] ?? null;
        $categ->name112 = $data['name112'] ?? null;
        $categ->name113 = $data['name113'] ?? null;
        $categ->name114 = $data['name114'] ?? null;
        $categ->name115 = $data['name115'] ?? null;
        $categ->name116 = $data['name116'] ?? null;
        $categ->name117 = $data['name117'] ?? null;
        $categ->name118 = $data['name118'] ?? null;
        $categ->name119 = $data['name119'] ?? null;
        $categ->name120 = $data['name120'] ?? null;
        $categ->name121 = $data['name211'] ?? null;
        $categ->name122 = $data['name122'] ?? null;
        $categ->name123 = $data['name123'] ?? null;
        $categ->name124 = $data['name124'] ?? null;
        $categ->description = $data['description'] ?? null;

        if ($request->hasFile('image001')) {
            $file = $request->file('image001');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/category/'), $filename);
            $categ->image = $filename;
        }
        if ($request->hasFile('image002')) {
            $imagePaths = [];
            foreach ($request->file('image002') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/category/'), $filename);
                $imagePaths[] = 'uploads/category/' . $filename; 
            }
            $categ->image002 = json_encode($imagePaths); 
        }
        $categ->save();

        return redirect('admin/category')->with('message', 'Category added successfully');
    }
}
