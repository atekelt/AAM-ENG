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

Route::get('/brands/{brand}-{slug}', 'BrandController@show')->name('brand.show');

Route::get('/contact', function ()
{
	return view('contact');
})->name('contact');

Route::post('/contact', function(){
	redirect(url()->previous());
})->name('contact-submit');


Route::get('/products/', 'ProductController@index')->name('products.all');
Route::get('/product/{product}-{slug}', 'ProductController@show');


Route::get('/cart', 'CartController@index');

Route::post('/order/{product}/{number}', 'CartController@addProductToCart')->where('id', '[0-9]+')->name('order.add');
Route::post('/order/remove/{product}', 'CartController@removeProductFromCart')->name('order.remove');

Route::post('/checkout', 'OrderController@create');

Route::get('/login', 'SessionController@index')->name('login');
Route::post('/login', 'SessionController@store')->name('login-action');
Route::post('/logout', 'SessionController@destroy')->name('logout');