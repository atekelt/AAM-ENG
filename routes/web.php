<?php

use Illuminate\Support\Facades\Route;

use App\Product;

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

// 
// 	Public facing URLS
// 
Route::get('/', function () {
	$products = Product::all();
    return view('index', compact('products'));
})->name('home');

Route::get('/about', function ()
{
	return view('about');
})->name('about');

Route::get('/brands', 'BrandController@index')->name('brands.all');
Route::get('/brands/create', 'BrandController@create');
Route::post('/brands/store', 'BrandController@store');

Route::get('/brands/{brand}-{slug}', 'BrandController@show')->name('brand.show');

Route::get('/contact', function ()
{
	return view('contact');
})->name('contact');

Route::post('/contact', function(){
	redirect(url()->previous());
})->name('contact-submit');


Route::get('/products', 'ProductController@index')->name('products.all');
Route::get('/product/{product}-{slug}', 'ProductController@show');
Route::get('/products/create', 'ProductController@create');
Route::post('/products/store', 'ProductController@store');

Route::get('/cart', 'CartController@index');
Route::post('/cart/store', 'CartController@store');
Route::post('/cart/destroy','CartController@destroy');
Route::post('/cart/create', 'CartController@create');

Route::get('/order', 'OrderController@index');
Route::post('/order/destroy', 'OrderController@destroy');
Route::post('/order/show','OrderController@show');
Route::post('/order/update', 'OrderController@update');

Route::post('/checkout', 'OrderController@create');

Route::get('/login', 'SessionController@index')->name('login');
Route::post('/login', 'SessionController@store')->name('login-action');
Route::post('/logout', 'SessionController@destroy')->name('logout');

Route::get('/admin/{id}/edit', 'AdminController@edit');
Route::put('/admin/update/{id}', 'AdminController@update');
Route::delete('/admin/{id}', 'AdminController@destroy');

Auth::routes();

Route::get('/home', 'AdminController@index');
