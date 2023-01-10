<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index (){
        return view('admin.products.index');
    }

    public function show (){
        return view('admin.products.show');
    }
    public function add (){
        $data['categories'] = Category::all();
        return view('admin.products.add',[
            'categories' => $data['categories'],
        ]);
    }
    public function store (Request $request){
        dd($request->all());
        return view('admin.products.add');
    }


}
