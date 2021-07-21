<?php

use App\Http\Controllers\AdmController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\MaterialsController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\SiteController;
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

Route::get('/', [SiteController::class, 'index']);
Route::get('cart', [SiteController::class, 'cart']);

Route::get('adm', [AdmController::class, 'index'])->name('adm');
Route::post('adm', [AdmController::class, 'login'])->name('login');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [AdminController::class, 'index']);
    Route::get('sair', [AdminController::class, 'sair'])->name('sair');

    Route::resource('categories', CategoriesController::class);
    Route::post('categories/search', [CategoriesController::class, 'search'])->name('categories.search');

    Route::resource('materials', MaterialsController::class);
    Route::post('materials/search', [MaterialsController::class, 'search'])->name('materials.search');

    Route::resource('products', ProductsController::class);
    Route::post('products/search', [ProductsController::class, 'search'])->name('products.search');

    Route::get('users', [UsersController::class, 'index']);
    Route::match(['post', 'get'], 'users/create', [UsersController::class, 'create']);
    Route::match(['post', 'get'], 'users/edit/{id}', [UsersController::class, 'edit']);
    Route::match(['post', 'get'], 'users/delete/{id}', [UsersController::class, 'delete']);

    Route::get('/laravel', function () {
        return view('welcome');
    });
});
