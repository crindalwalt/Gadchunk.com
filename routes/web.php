<?php

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\ProductAttribute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\WeightController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NavigatorController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductTypeController;

use App\Http\Controllers\ProductAttributeController;
use App\Http\Controllers\ProductInventoryController;
use App\Http\Controllers\ProductAttributeValueController;

use App\Http\Controllers\User\WishlistController;






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

Route::prefix('admin')->middleware(['auth', 'isAdmin', 'verified'])->group(function () {
   Route::get('/', function () {

      return view('admin.dashboard');
   })->name('admin');

   // Users CRUD
   Route::get('users/', [UserController::class, 'index']);
   Route::get('profile/', [UserController::class, 'profile'])->name('admin.profile');

   // Product Inventory Management

   //    Route::get('product_inventory/',[ProductInventoryController::class,'index']);
   //    Route::post('/prod_inventory/add/', [ProductInventoryController::class,'store'])->name('inventory.store');

   //    Route::post('/var_val/',[ProductAttributeValueController::class,'variation_value']);

   // Category CRUD
   Route::get('category/', [CategoryController::class, 'index'])->name("category.index");
   Route::post('/category/delete/', [CategoryController::class, 'destroy'])->name('delete_category');
   Route::post('/category/store/', [CategoryController::class, 'store'])->name('store_category');
   Route::get('/category/{id}/update/', [CategoryController::class, 'edit'])->name('edit_category');
   Route::Post('/category/{id}/update/', [CategoryController::class, 'update'])->name('update_category');

   // Collection CRUD
   Route::get('collection/', [CollectionController::class, 'index']);

   // Brand CRUD
   Route::get('brand/', [BrandController::class, 'index'])->name('brand.index');
   Route::post('brand/add', [BrandController::class, 'store'])->name('brand.store');
   Route::get('brand_edit/{brand}', [BrandController::class, 'edit'])->name('brand.edit');
   Route::put('brand_update/{brand}', [BrandController::class, 'update'])->name('brand.update');
   Route::post('brand/delete', [BrandController::class, 'destroy'])->name('brand.delete');

   Route::post("attribute/{var}", function (Request $request, ProductAttribute $var) {

      //   dd($request->all());
   });

   // Promotion CRUD
   Route::get('promotion/', [PromotionController::class, 'index']);

   // Weight CRUD
   Route::get('weight/', [WeightController::class, 'index']);
   Route::post('/weight/add', [WeightController::class, 'store'])->name('weight.store');


   //Product Variation
   Route::get('/prod_var', [ProductAttributeController::class, 'index'])->name('product.variation');
   Route::post('/prod_var/add', [ProductAttributeController::class, 'store'])->name('prod_var.store');

   //Product Variation Value
   Route::post('/prod_var_value/add', [ProductAttributeValueController::class, 'store'])->name('prod_var_value.store');
   Route::post('/var_val', [ProductAttributeValueController::class, 'variation_value'])->name('prod_var_value.store');

   // Product type
   Route::get('/prod_type', [ProductTypeController::class, 'index'])->name('product.type');
   Route::post('/prod_type/add', [ProductTypeController::class, 'store'])->name('prod_type.store');

   //! PRODUCT
   Route::get('/products', [ProductController::class, 'index'])->name('products.all');

   Route::get('/product/add', [ProductController::class, 'add'])->name('products.add');
   Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
   Route::post('/product/{product}/update', [ProductController::class, 'update'])->name('products.update');
   Route::post('/product/{product}/delete', [ProductController::class, 'destroy'])->name('products.destroy');
   Route::get('/product/{product}', [ProductController::class, 'show'])->name('products.show');
   Route::post('/product/add', [ProductController::class, 'store'])->name('products.store');
   Route::get('/users', [ProductController::class, 'users'])->name('users.all');

   //! PRODUCT INVENTORY
   Route::get("/inventory/{product}/manage", [ProductInventoryController::class, 'index'])->name("inventory.manage");
   Route::post("/inventory/store", [ProductInventoryController::class, 'store'])->name("inventory.store");

   // Products Attributes CRUD
   Route::get("/attributes/variation", [ProductAttributeController::class, 'index'])->name("product.variation");
   Route::post("/attributes/variation", [ProductAttributeController::class, 'store'])->name("prod_variation_value.store");
   Route::post("/attributes/variation/values", [ProductAttributeController::class, 'storeValues'])->name("prod_variation_value.storeValues");
   Route::post("/attributes/variation/destroy", [ProductAttributeController::class, 'destroy'])->name("prod_variation_value.destroy");
   Route::get("/attributes/variationValues", [ProductAttributeController::class, 'variationValue'])->name("attributes.values.index");

   Route::post("/cat_attribute", [CategoryController::class, 'attr_filter']);


   //Collection CRUD
   Route::get('/collection', [CollectionController::class, 'index',])->name('collections.index');
   Route::get('/collection/add', [CollectionController::class, 'add',])->name('collections.add');
   Route::post('/collection/store', [CollectionController::class, 'store'])->name('collections.store');
   Route::get('/collection/{collection}', [CollectionController::class, 'show'])->name('collectons.show');
});


Route::get('/dashboard', function () {
   return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Main Site Page
Route::get('/', [NavigatorController::class, 'index'])->name('home');




/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
|
*/
Route::middleware('auth', 'verified')->group(function () {

   // site page

   Route::get('/shop', [NavigatorController::class, 'shop'])->name('shop');
   Route::get('/product_detail', [NavigatorController::class, 'single_item'])->name('product_detail');
   Route::get('/about', [NavigatorController::class, 'about'])->name('about');
   Route::get('/contact', [NavigatorController::class, 'contact'])->name('contact');


   // add wishlist controller
   Route::get('wishlist', [WishlistController::class, 'index'])->name('wishlist');
   Route::get('add-wishlist/{id}', [WishlistController::class, 'create'])->name('add.wishlist');
   Route::get('remove-wishlist/{id}', [WishlistController::class, 'remove'])->name('wishlist.remove');

   //Add Cart Controller
   Route::get('/cart', [CartController::class, 'index'])->name('cart');
   Route::get('add-cart/{id}/{quantity?}', [CartController::class, 'add'])->name('add-cart');
   Route::get('cart_remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
   Route::get('change/{id}/{quantity?}', [CartController::class, 'ChangeQty'])->name('cart.quantity');

   // checkout routes
   Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');

   // Profile routes
   Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
   Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
   Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

   // Profile routes
   Route::get('/profile', [UserController::class, 'profile'])->name('profile');
});



Route::get('/404', [NavigatorController::class, 'error'])->name('error');







require __DIR__ . '/auth.php';
