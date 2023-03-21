<?php
    use App\Http\Controllers\FrontendController;
    use App\Http\Controllers\admin\CategoryController;

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

    Route::get('/Trang_chủ',[FrontendController::class,'index'])->name('home');

    Route::get('/Liên_hệ',[FrontendController::class,'contact'])->name('contact');

    Route::get('/Giỏ_hàng',[FrontendController::class,'cart'])->name('cart');

    Route::get('/shop',[FrontendController::class,'shop'])->name('shop');

    Route::get('/category/{slug}/{id}', [CategoryController::class,'index']);
?>
