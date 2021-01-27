<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::get('/dash', function(){
    return view('dashboard');
});

Route::resource('home', 'HomeController');
Route::resource('product', 'ProductController');
Route::resource('aboutus', 'AboutusController');
Route::resource('contactus', 'ContactUsController');
Route::resource('service', 'ServiceController');
Route::resource('user', 'UserController');


Route::post('/home','HomeController@store')->name('homesstore');
Route::post('/logs','UserController@logs')->name('log');

//Route Page

Route::get('/productpage',function(){
    return view('products.product');
});
Route::get('/about',function(){
    return view('aboutus.about');
});
Route::get('/services',function(){
    return view('services.service');
});
Route::get('/contact',function(){
    return view('contactus.contactus');
});
Route::get('/team',function(){
    return view('page.team');
});





