<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('admin.brands.index', [
            'brands' => $brands,
        ]);
    }

    public function store(Request $request)
    {

        // dd($request->all());
        $request->validate([
            'name' => 'required|string',
        ]);

        $brand = new Brand();
        $brand->name = $request->name;
        $brand->save();
        if ($brand->save()) {
            alert("Success", 'Brand has been added successfully', 'success');
            return redirect()->back();
        } else {
            alert("Error", 'Brand not be saved', 'error');
        }

    }
}