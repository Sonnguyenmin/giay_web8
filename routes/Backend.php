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
    Route::get('/Đăng-nhập',[BackendController::class,'login'])->name('login');

    Route::post('/Đăng-nhập',[BackendController::class,'post_login']);

    // Đăng ký thành viên
    Route::get('/Đăng-ký',[BackendController::class,'register'])->name('register');

    Route::post('/Đăng-ký',[BackendController::class,'post_register']);

    // Đăng xuất
    Route::get('/Đăng-xuất',[LogoutController::class,'logout'])->name('logout');
?>
