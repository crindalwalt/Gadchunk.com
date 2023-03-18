<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $data['brands'] = Brand::all();
        $data['products'] = Product::all();
        return view('admin.brands.index',$data);
    }

    public function store(Request $request)
    {

        // dd($request->all());
        $request->validate([
            'name' => 'required|string',
            'brand_icon' => 'required|mimes:png,svg|max:2048',
        ]);

        $brand = new Brand();
        $brand->name = $request->name;
        if ($request->hasFile('brand_icon')) {
            $filename = 'brand-' . time() . rand(99, 199) . '.' . $request->file('brand_icon')->getClientOriginalExtension();
            $request->file('brand_icon')->storeAs('public/brand_icons', $filename);

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
    public function edit(Brand $brand)
    {
        // dd($id);
        $data['brand'] = $brand;
        return view('admin.brands.edit', $data);
    }

    public function update(Request $request, Brand $brand)
    {

        $request->validate([
            'name' => 'required|string',
            'brand_icon' => 'required|max:2048',
        ]);
        // dd($id);
        $brand->name = $request->name;
        if ($request->hasFile('brand_icon')) {
            if (!empty($brand->brand_icon)) {
                $file =  'public/brand_icons/' . $brand->brand_icon;
                if (file_exists($file)) {
                    unlink($file);
                }
            }
            $filename = 'brand-' . time() . rand(99, 199) . '.' . $request->file('brand_icon')->getClientOriginalExtension();
            $request->file('brand_icon')->move('storage/brand_icons', $filename);
        }

        if (isset($filename)) {
            // @dd($filename);
            $brand->brand_icon = $filename;
        }
        // @dd($brand);
        $result =  $brand->update([
            'name' => $request->name,
            'brand_icon' => $filename,
        ]);
        // dd($brand);
        if ($result) {
            alert("Success", 'Brand has been Updated successfully', 'success');
            return redirect('admin/brand');
        } else {
            alert("Error", 'Brand not be Updated', 'error');
            return redirect('admin/brand');
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
