<?php

use App\Http\Controllers\HomeController;
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


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/menu', [HomeController::class, 'menu'])->name('menu');;
Route::get('/about', [HomeController::class, 'about'])->name('about');;
Route::get('/book', [HomeController::class, 'book'])->name('book');;
Route::get('/blank', [HomeController::class, 'blank'])->name('blank');;



// Admin

//alttaki komutu yazma sebebimiz '/category' lerin başına admin eklememek için

Route::middleware('auth')->prefix('admin')->group(function () {

    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');
    // Category
    Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
    Route::get('category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');

    // Product
Route::prefix('product')->group(function () {
    //  Route assigned name "admin.users"...
    Route::get('/', [\App\Http\Controllers\Admin\ProductController::class, 'index'])->name('admin_products');
    Route::get('add', [\App\Http\Controllers\Admin\ProductController::class, 'create'])->name('admin_product_add');
    Route::post('create', [\App\Http\Controllers\Admin\ProductController::class, 'store'])->name('admin_product_store');
    Route::get('edit/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'edit'])->name('admin_product_edit');
    Route::post('update/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'update'])->name('admin_product_update');
    Route::get('delete/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'destroy'])->name('admin_product_delete');
    Route::get('show', [\App\Http\Controllers\Admin\ProductController::class, 'show'])->name('admin_product_show');
    });


// Product Image Gallery
    Route::prefix('image')->group(function () {
        Route::get('create/{product_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
        Route::post('store/{product_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
        Route::get('delete/{id}/{product_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
        Route::get('show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');
    });

    // Setting
    Route::get('setting', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
    Route::post('setting/update', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');





});

// Admin Login Logout route
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
Route::get('/user/profile', [HomeController::class, 'show'])->name('profile.show');


//home yazarsa home controllere girsin ve index'i çalıştırsın
//home controlerin arkaplanının sarı olması sayfanın en üstünde use komutunun olmayışından
//include başlayınca bu sayfa çağırıldığında body ile body arasında header ve footer'ı göstersin
//kaç div açıldıysa kapatmak lazım

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function ()

{
    return view('dashboard');
}

)->name('dashboard');


