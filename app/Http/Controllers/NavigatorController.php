<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class NavigatorController extends Controller
{
    //
    public function  index (){
        $categories = Category::latest()->get();
        return view('template.index', [
            'categories' => $categories,
        ]);
    }
}
