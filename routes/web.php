<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\NavigatorController;
use App\Http\Controllers\ProductAttributeController;
use App\Http\Controllers\ProductAttributeValueController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\ProductInventoryController;
use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WeightController;
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

    // Users CRUD
    Route::get('users/',[UserController::class,'index']);

   // Product Inventory Management
   
   Route::get('product_inventory/',[ProductInventoryController::class,'index']);
   Route::post('/prod_inventory/add/', [ProductInventoryController::class,'store'])->name('inventory.store');
   
   Route::post('/var_val/',[ProductAttributeValueController::class,'variation_value']);
   
   // Category CRUD
    Route::get('category/',[CategoryController::class,'index']);
    Route::post('/category/delete/',[CategoryController::class,'destroy'])->name('delete_category');
    Route::post('/category/store/', [CategoryController::class,'store'])->name('store_category');

    // Collection CRUD
    Route::get('collection/',[CollectionController::class,'index']);

    // Brand CRUD
    Route::get('brand/',[BrandController::class,'index'])->name('brand.index');
    Route::post('/brand/add',[BrandController::class,'store'])->name('brand.store');

    // Promotion CRUD
    Route::get('promotion/',[PromotionController::class,'index']);

    // Weight CRUD
    Route::get('weight/',[WeightController::class,'index']);
    Route::post('/weight/add',[WeightController::class,'store'])->name('weight.store');


   //Product Variation 
   Route::get('/prod_var',[ProductAttributeController::class,'index'])->name('product.variation');
   Route::post('/prod_var/add',[ProductAttributeController::class,'store'])->name('prod_var.store');

   //Product Variation Value 
   Route::post('/prod_var_value/add',[ProductAttributeValueController::class,'store'])->name('prod_var_value.store');
   Route::post('/var_val',[ProductAttributeValueController::class,'variation_value'])->name('prod_var_value.store');

    // Product type 
    Route::get('/prod_type',[ProductTypeController::class,'index'])->name('product.type');
    Route::post('/prod_type/add',[ProductTypeController::class,'store'])->name('prod_type.store');

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
    Route::get('/collection/{collection}',[CollectionController::class,'show'])->name('collectons.show');


});


Route::get('/dashboard', function () {   return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', [NavigatorController::class,'index'])->name('home');
Route::get('add-cart/{id}/{quantity?}' , [CartController::class , 'add'])->name('add-cart');

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

