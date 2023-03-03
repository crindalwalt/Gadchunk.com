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
            'brand_icon' => 'required|image|mimes:png,svg|max:2048',
        ]);

        $brand = new Brand();
        $brand->name = $request->name;
        if ($request->hasFile('brand_icon')) {
            $filename = 'brand-' . time() . rand(99, 199) . '.' . $request->file('brand_icon')->getClientOriginalExtension();
            $request->file('brand_icon')->storeAs('public/brand_icons', $filename);
        }
        if (isset($filename)) {
            $brand->brand_icon = $filename;
        }
        $brand->save();
        if ($brand->save()) {
            alert("Success", 'Brand has been added successfully', 'success');
            return redirect()->back();
        } else {
            alert("Error", 'Brand not be saved', 'error');
        }
    }

    public function destroy(Request $request)
    {
        $brand_del = Brand::find($request->id);
        $brand_del->delete();
        alert("Success", 'Brand has been deleted successfully', 'success');
        return redirect()->back();
    }
}