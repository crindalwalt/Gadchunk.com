<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function index(){
        $promotions = Promotion::all();
        return view('admin.promotion.index',[
            'promotions' => $promotions,
        ]);
    }
}
