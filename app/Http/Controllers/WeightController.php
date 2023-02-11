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
}
