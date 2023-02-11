<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();

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
        $products = Product::all();
        $categories = Category::all();
        return view('admin.products.index', [
            'categories' => $categories,
            'products' => $products,

        ]);
    }
    public function store(Request $request)
    {
        // dd($request->all());
        // validating the product details
        $request->validate([
            'name' => 'required|string',
            'category_id' => 'required|numeric',
            'description' => 'required|string',
        ]);
        // adding the product to the database table
        $product = new Product();

        $product->name = $request->name;
        $product->slug = "/" .trim( strtolower($request->name));
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        $productSave = $product->save();

        if($productSave){
             // sending a success notification on the admin side
             alert("Success", 'Product has been added successfully', 'success');
             // sending admin back to dashboard
             return redirect()->back();
        }else{
            alert("Error", 'Product not be saved', 'error');

        }
        $key = $product->getKey();



        if ($request->hasFile('product_image')) {

            foreach ($request->file('product_image') as $image) {
                $productImage = new ProductImage();
                $img_name = random_int(1000, 99999999) . time() . "-product" . $key . "." . $image->getClientOriginalExtension();

                $productImage->product_id = $product->id;
                $uploadPath = 'product-images/';
                // $databasePath = 'product-images' . $img_name;
                $productImage->image = $uploadPath . $img_name;

                $image->storeAs("public/" . $uploadPath, $img_name);

                // dd($productImage->save());
                $saveSuccess = $productImage->save();
            }

            if ($saveSuccess && $productSave) {
                // sending a success notification on the admin side
                alert("Success", 'Product has been added successfully', 'success');
                // sending admin back to dashboard
                return redirect()->back();
            } else {
                alert('Error', 'Product Images could not saved ', 'error');
                return redirect()->back();
            }






        } else {
            alert('Warning', 'Product Images are missing', 'warning');
            return redirect()->back();
        }




    }
    public function destroy(Product $product)
    {
        $product->delete();
        alert('Success', 'Product Deleted Successfully', 'success');
        return redirect()->route('products.all');
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