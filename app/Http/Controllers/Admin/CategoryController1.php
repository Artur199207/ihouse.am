<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\CategoryFormRequest1;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\Categ;
class CategoryController1 extends Controller
{
    public function index()
    {
        $categs = Categ::all();
        return view('admin.apartment.index', compact('categs'));
    }

    public function create()
    {
        return view('admin.apartment.create');
    }

    public function store(CategoryFormRequest1 $request)
    {
        $data = $request->validated();

        $categs = new Categ;
    
        // foreach ($data as $key => $value) {
        //     if (strpos($key, 'name') === 0) {
        //         $categs->$key = $value;
        //     }
        // }
      
        $categs->name100 = $data['name100'] ?? null;
        $categs->name101 = $data['name101'] ?? null;
        $categs->name102 = $data['name102'] ?? null;
        $categs->name103 = $data['name103'] ?? null;
        $categs->name104 = $data['name104'] ?? null;
        $categs->name105 = $data['name105'] ?? null;
        $categs->name106 = $data['name106'] ?? null;
        $categs->name107 = $data['name107'] ?? null;
        $categs->name108 = $data['name108'] ?? null;
        $categs->name109 = $data['name109'] ?? null;
        $categs->name110 = $data['name110'] ?? null;
        $categs->name111 = $data['name111'] ?? null;
        $categs->name112 = $data['name112'] ?? null;
        $categs->name113 = $data['name113'] ?? null;
        $categs->name114 = $data['name114'] ?? null;
        $categs->name115 = $data['name115'] ?? null;
        $categs->name116 = $data['name116'] ?? null;
        $categs->name117 = $data['name117'] ?? null;
        $categs->name118 = $data['name118'] ?? null;
        $categs->name219 = $data['name219'] ?? null;
        $categs->name120 = $data['name120'] ?? null;
        $categs->name121 = $data['name121'] ?? null;
        $categs->name122 = $data['name122'] ?? null;
        $categs->name123 = $data['name123'] ?? null;
        $categs->name124 = $data['name124'] ?? null;
        $categs->description = $data['description'] ?? null;

        if ($request->hasFile('image001')) {
            $file = $request->file('image001');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/categs/'), $filename);
            $categs->image001 = $filename;
        }

        if ($request->hasFile('image002')) {
            $imagePaths = [];
            foreach ($request->file('image002') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/categs/'), $filename);
                $imagePaths[] = 'uploads/categs/' . $filename;
            }
            $categs->image002 = json_encode($imagePaths);
        }

        $categs->save();

        return redirect('admin/categ')->with('message', 'Categs added successfully');
    }

    public function edit($id)
    {
        $categs = Categ::findOrFail($id);
        return view('admin.categs.edit', compact('categs'));
    }

    public function update(CategoryFormRequest1 $request, $categs_id)
    {
        $data = $request->validated();

        $categs = Categ::find($categs_id);

        if (!$categs) {
            return redirect('admin/categs')->with('message', 'Categs not found');
        }

        foreach ($data as $key => $value) {
            if (strpos($key, 'name') === 0) {
                $categs->$key = $value;
            }
        }

        $categs->description = $data['description'] ?? null;

        if ($request->hasFile('image001')) {
            $file = $request->file('image001');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/categs/'), $filename);
            $categs->image001 = $filename;
        }

        if ($request->hasFile('image002')) {
            $imagePaths = [];
            foreach ($request->file('image002') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/categs/'), $filename);
                $imagePaths[] = 'uploads/categs/' . $filename;
            }
            $categs->image002 = json_encode($imagePaths);
        }

        $categs->updated_by = Auth::user()->id;
        $categs->save();

        return redirect('admin/categs')->with('message', 'Categs updated successfully');
    }

    public function destroy($categs_id)
    {
        $categs = Categ::find($categs_id);

        if ($categs) {
            // Delete associated files
            if ($categs->image001 && File::exists(public_path('uploads/categs/' . $categs->image001))) {
                File::delete(public_path('uploads/categs/' . $categs->image001));
            }

            if ($categs->image002) {
                $images = json_decode($categs->image002);
                foreach ($images as $image) {
                    if (File::exists(public_path($image))) {
                        File::delete(public_path($image));
                    }
                }
            }

            $categs->delete();
            return redirect('admin/categs')->with('message', 'Categs deleted successfully');
        } else {
            return redirect('admin/categs')->with('message', 'Categs not found');
        }
    }

    protected function deleteImage($imagePath)
    {
        if (!empty($imagePath)) {
            $destination = public_path('uploads/categs/') . $imagePath;
            if (File::exists($destination)) {
                File::delete($destination);
            }
        }
    }
}
