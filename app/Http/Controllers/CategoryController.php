<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::latest()->get();

        return view('admin.category.index',[
            "categories" => $categories,
        ]);
    }
    public function store (Request $request){

//    dd($request->all());
        $request->validate([
          'category_name' => 'required|string',
        ]);

        $category = new Category();
        $category->name = $request->category_name;
        $category->slug = "/" .trim( strtolower($request->category_name));        $category->save();
        $category->is_active = 0;
        alert("Success", 'Category has been added successfully','success');
        return redirect()->back();

    }
    public function destroy (Request $request) {
        $cat_to_del = Category::find($request->id);
        $cat_to_del->delete();
        alert("Success", 'Category has been deleted successfully','success');
        return redirect()->back();
    }




}
