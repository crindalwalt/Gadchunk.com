<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Collection;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function index(){
        $data['products'] = Product::all();
        $data['collections'] = Collection::get();
        return view('admin.collection.index', $data);
    }
    public function show (Collection $collection){
        $data['collection'] = Collection::find($collection->id)->get();


        @dd( $data['collection']);
        return view('admin.collection.show',$data);
    }

    public function store (Request $request)
    {
        // dd($request->all());
        // validating the product details
        $request->validate([
            'name' => 'required|string',
            'title' => 'required|string',
            'discount_price' => 'required|string',
            'description' => 'required|string',
            'banner_image' => 'required',
            'collection_products' => 'required',
        ]);
        // Collection::create([
        //     'name' => $request->name,
        //     'slug' => $request->title,
        //     'title' => $request->title,
        //     'discount_percentage' => $request->discount_price,
        //     'description' => $request->description,

        // ]);
        $collection = new Collection();
        $collection->name = $request->name;
        $collection->slug = $request->title;
        $collection->title = $request->title;
        $collection->discount_percentage = $request->discount_price;
        $collection->description = $request->description;
        if ($request->hasFile('banner_image')) {
            $filename = 'collection-product-' . time() . rand(99, 199) . '.' . $request->file('banner_image')->getClientOriginalExtension();
            $request->file('banner_image')->storeAs('public/collections', $filename);
            $collection->banner_image = $filename;
        }
        $collection->save();
        $collectionProducts = $collection->products()->sync($request->collection_products);
        if($collection->save() &&  $collectionProducts ){
            alert("Success", 'Collection has been added successfully','success');

            return redirect()->back();
        }else{
            alert("error", 'Collection has not been added','warning');

            return redirect()->back();
        }

    }

    public function destroy($id){
        Collection::find($id)->delete();
        alert('Success', 'Collection Deleted Successfully', 'success');
        return redirect()->back();
    }
}
