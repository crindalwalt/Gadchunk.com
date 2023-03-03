<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ProductAttribute;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    public function index()
    {
        // $categories = Category::latest()->get();
        $data['categories'] = Category::latest()->get();
        $data['variations'] = ProductAttribute::latest()->get();

        return view('admin.category.index', $data);
    }
    public function store(Request $request)
    {

        // dd($request->input('attributes'));
        $request->validate([
            'category_name' => 'required|string',
        ]);
        $cat_attributes = $request->input('attributes');
        $category = new Category();
        $category->name = $request->category_name;
        $category->slug = "/" . trim(strtolower($request->category_name));
        $category->save();
        $category->is_active = 0;
        // foreach ($request->attributes as $attr){

        //     $category->attributes()->create([
        //         'attribute_name' => $attr,
        //         'category_id' => $category->id,
        //     ]);
        // }
        $category->attributes()->attach($cat_attributes);
        alert("Success", 'Category has been added successfully', 'success');
        return redirect()->back();
    }
    public function edit(Category $id)
    {
        // dd($id);
        $data['category'] = $id;
        $data['variations'] = ProductAttribute::latest()->get();
        return view('admin.category.edit', $data);

    }
    public function update(Request $request,Category $id)
    {
        $request->validate([
            'category_name' => 'required|string',
        ]);
        // dd($request->all());
        $id->update([
            'name' => $request->category_name,
        ]);
        $cat_attributes = $request->input('attributes');
        $id->attributes()->sync($cat_attributes);
        
        alert("Success", 'Category has been updated successfully', 'success');
        return redirect(route('category.index'));
    }
    public function destroy(Request $request)
    {
        $cat_to_del = Category::find($request->id);
        $cat_to_del->delete();
        alert("Success", 'Category has been deleted successfully', 'success');
        return redirect()->back();
    }
}
