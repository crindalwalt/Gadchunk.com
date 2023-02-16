<?php

namespace App\Http\Controllers;

use App\Models\ProductAttributeValue;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductAttributeValueController extends Controller
{

    public function variation_value(Request $request){
        $id = $request->post('id');
        $values = DB::table('product_attribute_values')->where('product_attribute_id',$id)->get();
       $html = '<option value="" 
       class="d-flex justify-content-between ">
       <small
           class="badge badge-pill badge-dark rounded-pill">&nbsp;&nbsp;</small>
        </option>';
        foreach ($values as $value){
          $html.='<option value="" 
          class="d-flex justify-content-between ">
          '.$value->attribute_value.'
          <small
              class="badge badge-pill badge-dark rounded-pill">&nbsp;&nbsp;</small>
      </option>';
        }
        echo $html;
   }
    public function store(Request $request)
    {

        // dd($request->all());
        $request->validate([
            'product_attribute_id' => 'required|numeric',
            'attribute_value' => 'required|string',
        ]);

        $value = new ProductAttributeValue();
        $value->product_attribute_id = $request->product_attribute_id;
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
