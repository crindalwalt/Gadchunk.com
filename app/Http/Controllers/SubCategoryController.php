<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index()
    {
        // $categories = Category::latest()->get();
        $data['categories'] = Category::latest()->get();
        $data['sub_categories'] = SubCategory::latest()->get();
        return view('admin.category.sub_category', $data);
    }
    public function store(Request $request)
    {

        // dd($request->all());
        $request->validate([
            'name' => 'required|string',
            'category_id' => 'required',
        ]);
        $sub_category = new SubCategory();
        $sub_category->name = $request->name;
        $sub_category->category_id = $request->category_id;
        $sub_category->save();
        alert("Success", 'Sub-Category has been added successfully', 'success');
        return redirect()->back();
    }
    public function edit(SubCategory $id)
    {
        // dd($id);
        $data['sub_category'] = $id;
        $data['categories'] = Category::latest()->get();
        return view('admin.category.sub_category_edit', $data);

    }
    public function update(Request $request,SubCategory $id)
    {
        $request->validate([
            'name' => 'required|string',
            'category_id' => 'required',
        ]);
        // dd($request->all());
        $id->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
        ]);

        alert("Success", 'Sub-Category has been updated successfully', 'success');
        return redirect(route('sub_category.index'));
    }
    public function destroy(Request $request)
    {
        $del = SubCategory::find($request->id);
        $del->delete();
        alert("Success", 'Sub-Category has been deleted successfully', 'success');
        return redirect()->back();
    }
}
