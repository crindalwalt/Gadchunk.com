<?php

namespace App\Http\Controllers;

use App\Models\Weight;
use Illuminate\Http\Request;

class WeightController extends Controller
{
     public function index(){
        $weights = Weight::all();
        return view('admin.weight.index',[
            'weights' => $weights,
        ]);
    }
    public function store(Request $request)
    {

        // dd($request->all());
        $request->validate([
            'name' => 'required|numeric',
            'abbreviation' => 'required|string',
        ]);

        $weight = new Weight();
        $weight->name = $request->name;
        $weight->abbreviation = $request->abbreviation;
        $weight->save();
        if ($weight->save()) {
            alert("Success", 'Weight has been added successfully', 'success');
            return redirect()->back();
        } else {
            alert("Error", 'Weight not be saved', 'error');
        }

    }
}
