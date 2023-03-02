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

        //    dd($request->all());
        $request->validate([
            'category_name' => 'required|string',
        ]);

        $category = new Category();
        $category->name = $request->category_name;
        $category->slug = "/" . trim(strtolower($request->category_name));
        $category->save();
        $category->is_active = 0;
        foreach ($request->attributes as $attr)
            $category->attributes()->create([
                'attribute_name' => $attr,
                'category_id' => $category->id,
            ]);
        alert("Success", 'Category has been added successfully', 'success');
        return redirect()->back();
    }
    public function destroy(Request $request)
    {
        $cat_to_del = Category::find($request->id);
        $cat_to_del->delete();
        alert("Success", 'Category has been deleted successfully', 'success');
        return redirect()->back();
    }
}
