<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function account (){
        $user = Auth::user();
//        dd($user);
        return view('template.my-account',[
            'user' => $user
        ]);
    }

    // public function index(){
    //     $users = User::all();
    //     return view('admin.users.index',[
    //         'users' => $users,
    //     ]);
    // }
}
