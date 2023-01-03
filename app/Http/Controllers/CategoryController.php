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

        $request->validate([
          'category_name' => 'required|string',
          'category_icon' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);

        if($request->hasFile('category_icon')) {

            $file = $request->file('category_icon') ;
            $filenameToSave = time() . "-cat-icon." . $file->getClientOriginalExtension();
            $request->file('category_icon')->storeAs('public/category-icon/',$filenameToSave);

        }else{
            alert('warning','Category icon not uploaded correctly','warning');
            return redirect()->back();
        }


        $category = new Category();
        $category->name = $request->category_name;
        $category->slug = "/" .trim( strtolower($request->category_name));
        $category->icon = $filenameToSave;
        $category->save();
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
