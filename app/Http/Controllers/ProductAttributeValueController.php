<?php

namespace App\Http\Controllers;

use App\Models\ProductAttributeValue;
use Illuminate\Http\Request;

class ProductAttributeValueController extends Controller
{
    public function store(Request $request)
    {

        // dd($request->all());
        $request->validate([
            'product_attribute' => 'required|numeric',
            'attribute_value' => 'required|string',
        ]);

        $value = new ProductAttributeValue();
        $value->product_attribute = $request->product_attribute;
        $value->attribute_value = $request->attribute_value;
        $value->description = $request->description;
        $value->save();
        if ($value->save()) {
            alert("Success", 'Variation value has been added successfully in Inventory', 'success');
            return redirect()->back();
        } else {
            alert("Error", 'Variation value not be saved', 'error');
        }

    }
}
