<?php
    use App\Http\Controllers\Check\AdminController;
    use App\Http\Controllers\Check\BackendController;
    use App\Http\Controllers\Check\LogoutController;


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
    Route::get('/Trang-quản-trị',[AdminController::class,'admin'])->name('admin');

    // Đăng nhập và xử lý đăng nhập
    Route::prefix('/Đăng-nhập')->group(function(){
        Route::get('',[BackendController::class,'login'])->name('login');
        Route::post('',[BackendController::class,'post_login']);
    });
    // Đăng ký thành viên
    Route::prefix('/Đăng-ký')->group(function(){
        Route::get('',[BackendController::class,'register'])->name('register');
        Route::post('',[BackendController::class,'post_register']);
    });
    // Đăng xuất
    Route::get('/Đăng-xuất',[LogoutController::class,'logout'])->name('logout');
?>
