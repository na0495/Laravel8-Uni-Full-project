<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\Admin\ProductController;

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
    return view('Auth/login');
});

//route client

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth','admin']], function ()
{
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/user', function () {
        return view('admin.user');
    });
    Route::get('/aboutus', function () {
        return view('admin.aboutus');
    });
    //Gestion de client / Admin 
    Route::get('/role-register', [TableController::class, 'registerd']);
    Route::get('/role-edit/{id}', [TableController::class, 'registerdedit']);
    Route::put('/role-register-update/{id}', [TableController::class, 'registerdupdate']);
    Route::delete('/role-delete/{id}', [TableController::class, 'registerdelete'] );
    //Gestion de produit 
    Route::get('/product', [ProductController::class, 'registerd']);
    Route::get('/product-edit/{id}', [ProductController::class, 'registerdedit']);
    Route::put('/product-register-update/{id}', [ProductController::class, 'registerdupdate']);
    Route::delete('/product-delete/{id}', [ProductController::class, 'registerdelete'] );
    Route::post('/save-product', [ProductController::class, 'registerdadd']);

});
