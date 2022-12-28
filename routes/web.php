<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('template.index');
});
Route::get('/shop', function () {
    return view('template.shop');
});
Route::get('/shop-item',function(){
   return view('template.product-details');
});
Route::get('/about',function(){
   return view('template.about');
});
Route::get('/contact',function(){
   return view('template.contact');
});
Route::get('/404',function(){
   return view('template.404');
});
Route::get('/blog',function(){
   return view('template.blog');
});
Route::get('/blog-detail',function(){
   return view('template.blog-detail');
});

Route::get('/dashboard', function () {   return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
