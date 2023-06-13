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
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductTypeController;

use App\Http\Controllers\ProductAttributeController;
use App\Http\Controllers\ProductInventoryController;
use App\Http\Controllers\ProductAttributeValueController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\User\WishlistController;
use App\Mail\OrderMail;
use Illuminate\Support\Facades\Mail;

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
    Route::get('/', [UserController::class, 'dashboard'])->name('admin');

    // Users CRUD
    Route::get('users/', [UserController::class, 'index']);
    Route::get('/main_profile', [UserController::class, 'profile'])->name('admin.profile');
    Route::post('/profile/{id}/update', [UserController::class, 'update_password'])->name('admin.profile.update');
    Route::post('/profile/{id}/delete', [UserController::class, 'destroy'])->name('admin.profile.destroy');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');

    // Product Inventory Management

    //    Route::get('product_inventory/',[ProductInventoryController::class,'index']);
    //    Route::post('/prod_inventory/add/', [ProductInventoryController::class,'store'])->name('inventory.store');

    //    Route::post('/var_val/',[ProductAttributeValueController::class,'variation_value']);

    // Category CRUD
    Route::get('category/', [CategoryController::class, 'index'])->name("category.index");
    Route::post('/category/delete/', [CategoryController::class, 'destroy'])->name('delete_category');
    Route::post('/category/store/', [CategoryController::class, 'store'])->name('store_category');
    Route::get('/category/{id}/edit/', [CategoryController::class, 'edit'])->name('edit_category');
    Route::Post('/category/{id}/update/', [CategoryController::class, 'update'])->name('update_category');

    // Category CRUD
    Route::get('sub_category/', [SubCategoryController::class, 'index'])->name("sub_category.index");
    Route::post('/sub_category/delete/', [SubCategoryController::class, 'destroy'])->name('sub_category.delete');
    Route::post('/sub_category/store/', [SubCategoryController::class, 'store'])->name('sub_category.store');
    Route::get('/sub_category/{id}/edit/', [SubCategoryController::class, 'edit'])->name('sub_category.edit');
    Route::Post('/sub_category/{id}/update/', [SubCategoryController::class, 'update'])->name('sub_category.update');


    // Brand CRUD
    Route::get('brand/', [BrandController::class, 'index'])->name('brand.index');
    Route::post('brand/add', [BrandController::class, 'store'])->name('brand.store');
    Route::get('brand_edit/{brand}', [BrandController::class, 'edit'])->name('brand.edit');
    Route::put('brand_update/{brand}', [BrandController::class, 'update'])->name('brand.update');
    Route::post('brand/delete', [BrandController::class, 'destroy'])->name('brand.delete');

    // Route::post("attribute/{var}", function (Request $request, ProductAttribute $var) {

    //    //   dd($request->all());
    // });

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
    Route::get('/product', [ProductController::class, 'index'])->name('products.all');

    Route::get('/product/add', [ProductController::class, 'add'])->name('products.add');
    Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::post('/product/{id}/update', [ProductController::class, 'update'])->name('products.update');
    Route::post('/product/{id}/delete', [ProductController::class, 'destroy'])->name('products.destroy');
    Route::get('/product/{product}', [ProductController::class, 'show'])->name('products.show');
    Route::post('/product/add', [ProductController::class, 'store'])->name('products.store');
    Route::get('/users', [ProductController::class, 'users'])->name('users.all');

    //! PRODUCT INVENTORY
    Route::get("/inventory/{product}/manage", [ProductInventoryController::class, 'index'])->name("inventory.manage");
    Route::get("/inventory/{product}/edit", [ProductInventoryController::class, 'edit'])->name("inventory.edit");
    Route::post('/inventory/{product}/update', [ProductInventoryController::class, 'update'])->name('inventory.update');

    Route::get("/inventory/manage", [ProductInventoryController::class, 'IndexPage'])->name("inventory.index");
    Route::post("/inventory/store", [ProductInventoryController::class, 'store'])->name("inventory.store");
    Route::post("/inventory/{id}/delete", [ProductInventoryController::class, 'destroy'])->name("inventory_products.destroy");

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
   Route::get('/collection/{id}', [CollectionController::class, 'show'])->name('collectons.show');
   Route::post('/collection/{id}', [CollectionController::class, 'destroy'])->name('collections.destroy');

   //order management
Route::get("/orders", [OrderController::class, 'index'])->name("orders.index");
Route::post("/orders/{id}/update", [OrderController::class, 'update_status'])->name("orders.update");


// Route::post('/orders', [OrderController::class, 'index'])->name('orders.index');

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Main Site Page
Route::get('/', [NavigatorController::class, 'index'])->name('home');

Route::get('/shop', [NavigatorController::class, 'shop'])->name('shop');
Route::get('/product/{id}', [NavigatorController::class, 'single_item'])->name('product_detail');
Route::get('/about', [NavigatorController::class, 'about'])->name('about');
Route::get('/contact', [NavigatorController::class, 'contact'])->name('contact');
Route::post('/search',[NavigatorController::class , 'searchQuery'])->name('search');

Route::get('/filter',[NavigatorController::class , 'filter'])->name('filter');



/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
|
*/
Route::middleware('auth', 'verified')->group(function () {

    // site page

   Route::post('/contact/message', [NavigatorController::class, 'message'])->name('contact.message');
   Route::get('/contact/message/show', [NavigatorController::class, 'MessageShow'])->name('contact.message.show');

    // add wishlist controller
    Route::get('wishlist', [WishlistController::class, 'index'])->name('wishlist');
    Route::get('add-wishlist/{id}', [WishlistController::class, 'create'])->name('add.wishlist');
    Route::get('remove-wishlist/{id}', [WishlistController::class, 'remove'])->name('wishlist.remove');

    //Add Cart Controller
    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::get('add-cart/{id}/{quantity?}/{attribute?}/{attribute_value?}', [CartController::class, 'add'])->name('add-cart');
    Route::get('cart_remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
    Route::get('change/{id}/{quantity?}', [CartController::class, 'ChangeQty'])->name('cart.quantity');
    Route::post('variation-change/{id}', [CartController::class, 'variation'])->name('cart.variation');
    //order routes
    Route::post('/order', [PaymentController::class, 'saveorder'])->name('stripe.post');
    Route::post('/order/{id}/delete', [PaymentController::class, 'OrderDestroy'])->name('order.destroy');
    Route::post('/review', [OrderController::class, 'review'])->name('review.add');


    // checkout routes
    Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');
    Route::get('/checkout/{id}', [CartController::class, 'buy'])->name('buy_now');

    // Profile routes
    Route::get('/profile', [UserController::class, 'user_profile'])->name('user.profile');
    Route::get('/profile/{id}/password', [UserController::class, 'update_password'])->name('user.update.password');
    Route::get('/profile/{id}', [UserController::class, 'update_profile'])->name('user.update');
    Route::post('/profile/{user}/avatar', [UserController::class, 'update_profile_avatar'])->name('user.avatar');
    Route::get('/profile_edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile_update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile_destroy', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');

   // Profile routes
   Route::get('/track_order', [UserController::class, 'track_order'])->name('order_list');

//    Route::get('/filter',[NavigatorController::class , 'filter'])->name('filter');

});


Route::get('/thank', function () {
    return view('template.thankyou');
});
Route::get('/thanks', [CartController::class, 'thankyou'])->name('thankyou');
Route::get('/404', [NavigatorController::class, 'error'])->name('error');


//-=============================  Testing Routes  =======================
Route::get('/test', [CartController::class, 'SessionCheck']);
Route::get('/testing', [PaymentController::class, 'check']);



// Route::get('send-mail', [PaymentController::class, 'sendmail']);
// Route::get('send-mail', function () {

//     $details = [
//         'title' => 'Mail from GadChunk.com',
//         'body' => 'This is for testing email using smtp'
//     ];
//     // @dd(new OrderMail($details));

//     Mail::to('test@gmail.com')->send(new OrderMail($details));

//     dd("Email is Sent.");
// });


require __DIR__ . '/auth.php';
