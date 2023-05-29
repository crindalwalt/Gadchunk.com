<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\ProductImage;
use App\Models\SubCategory;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = SubCategory::all();

        return view('admin.products.index', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }

    public function show(Product $product)
    {
        return view('admin.products.show', [
            'product' => $product,
        ]);
    }

    public function add()
    {
        $data['products'] = Product::all();
        $data['categories'] = SubCategory::all();
        $data['attributes'] = ProductAttribute::all();
        $data['brands'] = Brand::all();
        return view('admin.products.index', $data);
    }

    public function store(Request $request)
    {
        // validating comming request
        $request->validate([
            "product_name" => ["required", "string"],
            "product_brand" => ['required'],
            "category_id" => ["required"],
            "product_description" => ["required"],
            "product_image" => ['array'],
        ]);

        // storing image
        if ($request->hasFile('product_image')) {
            foreach ($request->file('product_image') as $file) {
                $filename = 'product-' . time() . rand(99, 199) . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/product_images', $filename);
            }
        } else {
            alert("Error", 'product image could not found', 'warning');
            return redirect()->back();
        }

        // sending data to modal
        $productToSave = Product::create([
            'name' => $request->input("product_name"),
            'slug' => "/" . trim(strtolower($request->name)),
            'brand_id' => $request->input("product_brand"),
            'category_id' => $request->input("category_id"),
            'description' => $request->input("product_description"),
            'featured_image' => $filename,
        ]);

        // validation to check if saved or not
        if ($productToSave) {
            return redirect()->route('inventory.manage',$productToSave->id);
        } else {
            return redirect()->back();
        }
    } // store method end






    public function destroy(Request $request)
    {
        $product = Product::find($request->id);
        $product->delete();
        alert('Success', 'Product Deleted Successfully', 'success');
        return redirect()->back();
    }

    public function edit(Product $product)
    {
        //        return "editing product no $product->id here we go";
        return view('admin.products.edit', [
            'product' => $product,
            'categories' => Category::all()
        ]);
    }

    public function update(Product $product, Request $request)
    {
        // validating the product details
        $request->validate([
            'product_name' => 'required|string',
            'product_brand' => 'required|string',
            'product_price' => 'required|numeric',
            'product_discount_price' => 'required|numeric',
            'product_category' => 'required|string',
            'product_description' => 'required|string',
            'product_stock' => 'required|numeric',
            'product_image' => 'array',
        ]);
        $product->name = $request->product_name;
        $product->category_id = $request->product_category;
        $product->description = $request->product_description;
        $product->brand = $request->product_brand;
        $product->orignalPrice = $request->product_price;
        $product->discountPrice = $request->product_discount_price;
        $product->stock = $request->product_stock;
        $productSave = $product->save();
        $key = $product->getKey();


        if ($request->hasFile('product_image')) {
            $product->productImage()->delete();
            foreach ($request->file('product_image') as $image) {
                $productImage = new ProductImage();
                $img_name = random_int(1000, 99999999) . time() . "-product" . $key . "." . $image->getClientOriginalExtension();

                $productImage->product_id = $product->id;
                $uploadPath = 'product-images/';
                // $databasePath = 'product-images' . $img_name;
                $productImage->image = $uploadPath . $img_name;

                $imgSaveSuccess = $image->storeAs("public/" . $uploadPath, $img_name);

                // dd($productImage->save());
                $saveSuccess = $productImage->save();
            }

            if ($saveSuccess && $productSave && $imgSaveSuccess) {
                // sending a success notification on the admin side
                alert("Success", 'Product has been updated successfully', 'success');
                // sending admin back to dashboard
                return redirect()->back();
            } else {
                alert('Error', 'Product Images could not saved ', 'error');
                return redirect()->back();
            }
        } else {
            alert('success', 'Product updated with already existed photos', 'success');
            return redirect()->back();
        }
    }

    public function users()
    {
        $users = User::all();
        return view('admin.users.index', [
            'users' => $users
        ]);
    }
}
