<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ProductAttribute;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        // $categories = Category::latest()->get();
        $data['categories'] = Category::latest()->get();
        $data['variations'] = ProductAttribute::latest()->get();

        return view('admin.category.index', $data);
    }
    public function store(Request $request)
    {

        // dd($request->all());
        $request->validate([
            'category_name' => 'required|string',
            'category_icon' => 'required|image',
        ]);
        $cat_attributes = $request->input('attributes');
         // storing image
         $file = $request->file('category_icon');
         if ($request->hasFile('category_icon')) {
                $filename = 'cat-icon' . time() . rand(99, 199) . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/categories_icons', $filename);
        } else {
            alert("Error", 'icon could not found', 'warning');
            return redirect()->back();
        }

        $category = new Category();
        $category->name = $request->category_name;
        $category->slug = "/" . trim(strtolower($request->category_name));
        $category->icon = $filename;
        $category->save();
        $category->is_active = 0;

        if ( $cat_attributes) {
            $category->attributes()->attach($cat_attributes);
        }
        alert("Success", 'Category has been added successfully', 'success');
        return redirect()->back();
    }
    public function edit(Category $id)
    {
        // dd($id);
        $data['category'] = $id;
        $data['variations'] = ProductAttribute::latest()->get();
        return view('admin.category.edit', $data);

    }
    public function update(Request $request,Category $id)
    {
        $request->validate([
            'category_name' => 'required|string',
        ]);
        // dd($request->all());
        $id->update([
            'name' => $request->category_name,
        ]);
        $cat_attributes = $request->input('attributes');
        $id->attributes()->sync($cat_attributes);

        alert("Success", 'Category has been updated successfully', 'success');
        return redirect(route('category.index'));
    }
    public function destroy(Request $request)
    {
        $cat_to_del = Category::find($request->id);
        $cat_to_del->delete();
        alert("Success", 'Category has been deleted successfully', 'success');
        return redirect()->back();
    }

    // category with attribute
    public function attr_filter(Request $request){
        $id = $request->post('id');
        $values = DB::table('attributes_category')->where('category_id',$id)->get();
        $loop_div = 1;
        $html = '
       <div class="div">
       <h4>Add Variation</h4>
       <p>You can add variation detail here</p>
   </div>';
   foreach ($values as $value){
       $loop_div++;
    $html .='<div class="card" id="product_attribute_'.$loop_div.'">
           <div class="card-body">
               <div class="row">
                   <div class="col-md-6 mb-3">
                       <label class="control-label">Attribute'
                           .$value->attribute_id .'</label>
                       <select name="prod_variation[]" class="form-control select2" multiple>
                           <option>Select</option>';
        // foreach ($value->prod_attribute_value as $item){
                            $html.=   '<option value=" "
                                   class="d-flex justify-content-between">

                                   <small
                                       class="badge badge-pill badge-dark rounded-pill">&nbsp;&nbsp;</small>
                               </option>';
//    };

                $html.=      '</select>
                       @error()
                           <div class="text-danger fw-semibold">{{ $message }}</div>
                       @enderror
                   </div>
               </div>
           </div>

       <div class="col">
           <button class="btn btn-md  btn-success m-4" style="float: right" type="button"
               title="Add another varaition" onclick="add_more('.$loop_div.')">
               <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                   fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                   <path fill-rule="evenodd"
                       d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
               </svg>
           </button>
       </div>
   </div>';
    };

        echo $html;
   }
}
