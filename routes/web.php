<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('category', [CategoryController::class, 'index'])->name('category.index');
Route::get('category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('category', [CategoryController::class, 'store'])->name('category.store');
Route::get('category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('category/update', [CategoryController::class, 'update'])->name('category.update');
Route::get('category/delete/{cat_id}', [CategoryController::class, 'destroy'])->name('category.destroy');





















Auth::routes();
//  Admin Route
Route::group(['prefix'=> 'admin', 'middleware' => ['admin, auth'], 'namespace'=> 'admin'], function(){
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});
//  User Route
Route::group(['prefix'=> 'user', 'middleware' => ['user, auth'], 'namespace'=> 'user'], function(){
    Route::get('dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
});




// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

