<?php
    use App\Http\Controllers\FrontendController;
    use App\Http\Controllers\User\ShopController;
    use App\Http\Controllers\User\CartController;
    use App\Http\Controllers\User\CheckoutController;
    use App\Http\Controllers\User\myAccountUserController;
    use App\Http\Controllers\User\AccountController;
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


    Route::get('/',[FrontendController::class,'index']);
    Route::get('/',[FrontendController::class,'index'])->name('home');
    Route::get('/blog',[FrontendController::class,'blog'])->name('blog');
    Route::prefix('contact')->group(function(){
        Route::get('',[FrontendController::class,'contact'])->name('contact');
        Route::Post('',[FrontendController::class,' '])->name('contact');
    });
    Route::prefix('shop')->group(function(){
        Route::get('/',[ShopController::class,'index'])->name('shop');
        
        Route::get('category/{cateName}',[ShopController::class,'category']);

        Route::get('brand/{brandName}',[ShopController::class,'brand']);
    });
    Route::prefix('product-details')->group(function(){
        Route::get('/{slug}/{id}',[ShopController::class,'show'])->name('details.product');
        Route::post('/{slug}/{id}',[ShopController::class,'postComment'])->name('details.product');
    });
    Route::prefix('cart')->group(function(){
        Route::get('add',[CartController::class, 'add'])->name('addCart');
        Route::get('/',[CartController::class, 'index']);
        Route::get('delete',[CartController::class, 'delete']);
        Route::get('destroy',[CartController::class, 'destroy']);
        Route::get('update',[CartController::class, 'update']);
    });
    Route::prefix('checkout')->middleware('CheckMemberLogin')->group(function(){
        Route::get('', [CheckoutController::class, 'index']);
        Route::post('', [CheckoutController::class, 'addOrder']);
        Route::get('/result', [CheckoutController::class, 'result']);
        Route::get('/vnPayCheck', [CheckoutController::class, 'vnPayCheck']);
    });
    Route::prefix('account')->group(function(){
        Route::get('/login', [AccountController::class, 'login']);
        Route::post('/login', [AccountController::class, 'checkLogin']);
        Route::get('/logout', [AccountController::class, 'logout']);
        Route::get('/register', [AccountController::class, 'register']);
        Route::post('/register', [AccountController::class, 'postRegister']);
    });
    Route::prefix('myOrder')->middleware('CheckMemberLogin')->group(function(){
        Route::get('/', [AccountController::class, 'myOrder'])->name('myOrder');
        Route::get('{id}', [AccountController::class, 'myOrderShow']);
        Route::post('cancel/{id}', [AccountController::class, 'cancel'])->name('myOrder.cancel');
    });
    Route::resource('/MyAccount', myAccountUserController::class)->middleware('CheckMemberLogin');
?>
