<?php
    use App\Http\Controllers\FrontendController;
    use App\Http\Controllers\User\ShopController;
    use App\Http\Controllers\User\CartController;


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

    Route::prefix('shop')->group(function(){
        Route::get('/',[ShopController::class,'index'])->name('shop');

        Route::get('category/{cateName}',[ShopController::class,'category']);
        Route::get('brand/{brandName}',[ShopController::class,'brand']);
    });

    Route::get('/product-details/{slug}/{id}',[ShopController::class,'show'])->name('details.product');

    Route::prefix('cart')->group(function(){
        Route::get('add/{id}',[CartController::class, 'add'])->name('addCart');
        Route::get('/',[CartController::class, 'index']);

    });
?>
