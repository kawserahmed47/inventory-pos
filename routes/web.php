<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\ProductUnitController;
use App\Http\Controllers\SellController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;
use phpDocumentor\Reflection\Types\Resource_;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);

	
	Route::resource('employee', EmployeeController::class);
	Route::resource('supplier', SupplierController::class);
	Route::resource('customer', CustomerController::class);


	Route::resource('brand', BrandController::class);
	Route::resource('category', CategoryController::class);
	Route::resource('productType', ProductTypeController::class);
	Route::resource('product', ProductController::class);
	Route::resource('productUnit', ProductUnitController::class);
	Route::resource('order', OrderController::class);
	Route::resource('sell', SellController::class);
	Route::resource('cart', CartController::class);
	Route::get('/cart-remove',[ CartController::class, 'destroy'])->name('cart.remove');
	Route::get('/cart-quantity-update', [CartController::class, 'update'])->name('cart.quantity');
	Route::get('/cart-add-product', [CartController::class, 'addProduct'])->name('cart.addProduct');
	Route::get('/cart-info', [CartController::class, 'cartInfo'])->name('cart.info');


});

