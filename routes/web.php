<?php

use Illuminate\Support\Facades\Artisan;
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

/******************ADMIN PANELS ROUTES****************/
Route::group(['prefix' => 'admin', 'as'=>'admin.','namespace' => 'Admin',], function () {
 
    /*******************LOGIN ROUTES*************/
    Route::view('login', 'admin.auth.index')->name('login');
    Route::post('login','AuthController@login');
     /******************MESSAGE ROUTES****************/
     Route::resource('message', 'MessageController');
    Route::group(['middleware' => 'auth:admin'], function () { 
    /*******************Logout ROUTES*************/       
    Route::get('logout','AuthController@logout')->name('logout');
    /*******************Dashoard ROUTES*************/
    Route::view('dashboard', 'admin.dashboard.index')->name('dashboard.index');
    /******************ADMIN ROUTES****************/
      Route::resource('admin', 'AdminController');    
    /*******************Profile ROUTES*************/
    Route::view('profile', 'admin.profile.index')->name('profile.index');
    Route::view('messages', 'admin.message.index')->name('messages.index');
    /******************Information ROUTES****************/
    Route::resource('information', 'InformationController');
    /******************Slider ROUTES****************/
    Route::resource('slider', 'SliderController');
    /******************SERVICE ROUTES****************/
    Route::resource('service', 'ServiceController');
    /******************REVIEW ROUTES****************/
    Route::resource('review', 'ReviewController');
    /******************CATEGORIES ROUTES****************/
    Route::resource('category', 'CategoryController');
    /******************BRAND ROUTES****************/
    Route::resource('brand', 'BrandController');
    /******************PRODUCT ROUTES****************/
    Route::resource('product', 'ProductController');
    /******************PRODUCT IMAGES ROUTES****************/
    Route::resource('product_images', 'ProductImageController');
});
});


/******************FRONTEND ROUTES****************/
Route::get('/', 'Front\PageController@home')->name('home');
Route::group(['middleware' => 'website'], function () {
  Route::get('categories', 'Front\PageController@showCategory')->name('category.index');
  Route::get('category/{name}', 'Front\PageController@showCategoryDetails')->name('category.show');
  Route::get('brands', 'Front\PageController@showBrands')->name('brand.index');
  Route::get('brand/{name}', 'Front\PageController@showBrandDetails')->name('brand.show');
  Route::get('products', 'Front\PageController@showProducts')->name('product.index');
  Route::get('product/{name}', 'Front\PageController@showProductDetails')->name('product.show');
  Route::get('services','Front\PageController@services')->name('service.index');
  Route::get('service/{title}', 'Front\PageController@showServiceNext')->name('service.show');
  Route::view('contact_us', 'front.contact.index')->name('contact_us.index');
  Route::view('about_us', 'front.about.index')->name('about_us.index');
  Route::view('privacy_policy', 'front.privacy.index')->name('privacy_policy.index');
});

/******************FUNCTIONALITY ROUTES****************/
Route::get('/migrate/install', function() {
  Artisan::call('config:cache');
  Artisan::call('migrate:refresh');
  Artisan::call('db:seed', [ '--class' => DatabaseSeeder::class]);
  Artisan::call('view:clear');
  return 'DONE';
});
Route::get('/migrate', function() {
  Artisan::call('migrate');
  return 'Migration done';
});
Route::get('/cache_clear', function() {
  Artisan::call('config:cache');
  Artisan::call('view:clear');
  Artisan::call('cache:clear');
  return 'Cache Clear DOne';
});

