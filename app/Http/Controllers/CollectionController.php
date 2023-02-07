<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Collection;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function index(){
        $data['products'] = Product::all();
        $data['collections'] = Collection::all();
        return view('admin.collection.index',[
            'products' => $data['products'],
            'collections' => $data['collections'],
        ]);
    }
    public function store (Request $request)
    {
//         @dd($request->all());
        // validating the product details
        $request->validate([
            'name' => 'required|string',
            'title' => 'required|string',
            'discount_price' => 'required|string',
            'description' => 'required|string',
            'banner_image' => 'required',
        ]);
        // adding the product to the database table
        //  dd($request->all());
        // Collection::create([
        //     'name'  => $request->name,
        //     'slug' => "winter",
        //     'title' => $request->title,
        //     'discount_price' => $request->discount_price,
        //     'description' => $request->description,
        //     'banner_image' =>

        // ])
        $collection = new Collection();
        $collection->name = $request->name;
        $collection->slug = $request->title;
        $collection->title = $request->title;
        $collection->discount_percentage = $request->discount_price;
        $collection->description = $request->description;
        dd($collection->products()->sync($request->collection_products));
//        foreach ($request->collection_products as $product){
            $collection->products()->sync($request->collection_products);
//        }
        if ($request->hasFile('banner_image')) {
            $filename = 'product-' . time() . rand(99, 199) . '.' . $request->file('banner_image')->getClientOriginalExtension();
            $request->file('banner_image')->storeAs('public/collections', $filename);
        }
        if (isset($filename)) {
            $collection->banner_image = $filename;
        }
        $collection->save();

        if($collection->save()){
            alert("Success", 'Collection has been added successfully','success');

            return redirect()->back();
        }else{
            alert("error", 'Collection has not been added','warning');

            return redirect()->back();
        }

    }
}
