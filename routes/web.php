<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\NavigatorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Product;
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

Route::get('/', [NavigatorController::class,'index'])->name('home');
Route::get('/shop', function () {
    $products = Product::all();
    $category = Category::all();
    return view('template.shop',[
        'products' =>$products,
        'categories' => $category,
    ]);
})->name('shop');
Route::get('/shop-item',function(){

   return view('template.product-details');
});
Route::get('/about',function(){
   return view('template.about');
})->name('about');
Route::get('/contact',function(){
   return view('template.contact');
})->name('contact');
Route::get('/404',function(){
   return view('template.404');
});
Route::get('/blog',function(){
   return view('template.blog');
})->name('blog');
Route::get('/blog-detail',function(){
   return view('template.blog-detail');
});
Route::get('/account',[UserController::class,'account'])->middleware(['auth', 'verified'])->name('account');

Route::get('/wishlist',function(){
   return view('template.wishlist');
});
Route::get('/cart',function(){
   return view('template.cart');
})->name('cart');
Route::get('/checkout',function(){
   return view('template.checkout');
});
Route::get('/order-complete',function(){
   return view('template.order-complete');
});
Route::get('/order-tracking',function(){
   return view('template.order-tracking');
});

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/
Route::prefix('admin')->middleware(['auth','isAdmin', 'verified'])->group(function(){
    Route::get('/',function (){
        return view('admin.dashboard');
    })->name('admin');

    // Category CRUD
    Route::get('category/',[CategoryController::class,'index']);
    Route::post('/category/delete/',[CategoryController::class,'destroy'])->name('delete_category');
    Route::post('/category/store/', [CategoryController::class,'store'])->name('store_category');


    // Products CRUD
    Route::get('/products',[ProductController::class,'index'])->name('products.all');

    Route::get('/product/add',[ProductController::class,'add'])->name('products.add');
    Route::get('/product/{product}/edit',[ProductController::class,'edit'])->name('products.edit');
    Route::post('/product/{product}/update',[ProductController::class,'update'])->name('products.update');
    Route::post('/product/{product}/delete',[ProductController::class,'destroy'])->name('products.destroy');
    Route::get('/product/{product}',[ProductController::class,'show'])->name('products.show');
    Route::post('/product/add',[ProductController::class,'store'])->name('products.store');
    Route::get('/users',[ProductController::class,'users'])->name('users.all');


    //Collection CRUD
    Route::get('/collection', [CollectionController::class, 'index',])->name('collections.index');
    Route::get('/collection/add', [CollectionController::class, 'add',])->name('collections.add');
    Route::post('/collection/store',[CollectionController::class,'store'])->name('collections.store');


});


Route::get('/dashboard', function () {   return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
