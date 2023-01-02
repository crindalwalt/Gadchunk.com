<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::latest()->get();

        return view('admin.category.index',[
            "categories" => $categories,
        ]);
    }
    public function store (Request $request){

        $request->validate([
          'category_name' => 'required|string',
          'category_icon' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $cat_name = $request->category_name;
        $cat_slug = $request->category_slug;
        $cat_icon = $request->category_icon;

        $cat_ogName = $request->file('category_icon')->getClientOriginalName();
        $cat_path = $request->file('category_icon')->store('public/imgs/');

        $category = new Category();
        $category->name = $request->category_name;
        $category->slug = "/" .trim( strtolower($request->category_name));
        $category->icon = $cat_ogName;
        $category->save();
        return redirect()->back()->with('message','category added successfully');

    }
    public function destroy (Request $request) {
        $cat_to_del = Category::find($request->id);
        $cat_to_del->delete();
        return redirect()->back();
    }




}
