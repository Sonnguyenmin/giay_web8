<?php
    use App\Http\Controllers\admin\CategoryController;
    use App\Http\Controllers\admin\BrandController;
    use App\Http\Controllers\admin\MenuController;
    use App\Http\Controllers\admin\ProductController;
    use App\Http\Controllers\admin\AttributeController;
    use App\Http\Controllers\admin\SlideController;
    use App\Http\Controllers\admin\SettingController;
    use App\Http\Controllers\admin\AdminUserController;
    use App\Http\Controllers\admin\AdminRoleController;
    use App\Http\Controllers\admin\PermissionController;
    use App\Http\Controllers\admin\OrderController;
    use App\Http\Controllers\admin\StatisticalController;
    use App\Http\Controllers\admin\ProductImageController;
    use App\Http\Controllers\admin\myAccountController;
    use App\Http\Controllers\admin\BlogController;
    use App\Http\Controllers\admin\ProAttrController;
    use App\Http\Controllers\admin\ProCommentController;
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
//Các trang

    Route::resource('/blogs', BlogController::class)->middleware('can:blog-list');
    Route::resource('/category', CategoryController::class)->middleware('can:category-list');
    Route::resource('/brand', BrandController::class)->middleware('can:brand-list');
    Route::resource('/menu', MenuController::class)->middleware('can:menu-list');
    Route::resource('/attribute', AttributeController::class)->middleware('can:attribute-list');
    Route::resource('/product', ProductController::class)->middleware('can:product-list');
    Route::resource('/slide', SlideController::class)->middleware('can:slide-list');
    Route::resource('/setting', SettingController::class)->middleware('can:setting-list');
    Route::resource('/users', AdminUserController::class)->middleware('can:user-list');
    Route::resource('/roles', AdminRoleController::class)->middleware('can:role-list');
    Route::resource('/permission', PermissionController::class)->middleware('can:permission-list');
    Route::resource('/order', OrderController::class)->middleware('can:order-list');
    Route::resource('/Statistical', StatisticalController::class)->middleware('can:statistical-list');
    Route::resource('/ProductImage', ProductImageController::class)->middleware('can:productImage-list');
    Route::resource('/proAttr', ProAttrController::class)->middleware('can:proAttr-list');
    Route::resource('/proComment', ProCommentController::class)->middleware('can:proComment-list');
?>
