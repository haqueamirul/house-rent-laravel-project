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
    return view('frontend.index'); 
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//admin Authentication
Route::get('admin/home', 'AdminController@index')->name('admin.dashbord');
Route::get('admin', 'Admin\LoginController@showLoginForm')->name('login.admin');
Route::post('admin', 'Admin\LoginController@login');

//Countries=================
Route::get('/admin/countries', 'Backend\CountryController@countries')->name('countries');
Route::post('/store/countries', 'Backend\CountryController@stores')->name('store.country');
Route::get('/delete/country/{id}', 'Backend\CountryController@destroy')->name('delete.country');
Route::get('/edit/country/{id}', 'Backend\CountryController@edit');
Route::post('/update/country/{id}', 'Backend\CountryController@update')->name('update.country');


//Divisions=======================
Route::get('/admin/division', 'Backend\DivisionController@index')->name('divisions');
Route::post('/store/divisions', 'Backend\DivisionController@store')->name('store.division');
Route::get('/delete/division/{id}', 'Backend\DivisionController@destroy')->name('delete.division');
Route::get('/edit/division/{id}', 'Backend\DivisionController@edit');
Route::post('/update/division/{id}', 'Backend\DivisionController@update')->name('update.division');


//Districts=================
Route::get('/admin/district', 'Backend\DistrictController@index')->name('district');
Route::post('/store/district', 'Backend\DistrictController@store')->name('store.district');
Route::get('/delete/district/{id}', 'Backend\DistrictController@destroy')->name('delete.district');
Route::get('/edit/district/{id}', 'Backend\DistrictController@edit');
Route::post('/update/district/{id}', 'Backend\DistrictController@update')->name('update.district');


//Subdistricts=================
Route::get('/admin/subdistrict', 'Backend\SubdistrictController@index')->name('subdistrict');
Route::post('/store/subdistrict', 'Backend\SubdistrictController@store')->name('store.subdistrict');
Route::get('/delete/subdistrict/{id}', 'Backend\SubdistrictController@destroy')->name('delete.subdistrict');
Route::get('/edit/subdistrict/{id}', 'Backend\SubdistrictController@edit');
Route::post('/update/subdistrict/{id}', 'Backend\SubdistrictController@update')->name('update.subdistrict');


//Categories=================
Route::get('/admin/category', 'Backend\CategoryController@index')->name('category');
Route::post('/store/category', 'Backend\CategoryController@store')->name('store.category');
Route::get('/delete/category/{id}', 'Backend\CategoryController@destroy')->name('delete.category');
Route::get('/edit/category/{id}', 'Backend\CategoryController@edit');
Route::post('/update/category/{id}', 'Backend\CategoryController@update')->name('update.category');


//Jeson data mhltiple depadency
Route::get('/get/division/{country_id}', 'Backend\PostsController@GetSubcountry');
Route::get('/get/subdistrict/{dist_id}', 'Backend\PostsController@GetSubcat');

//Property Posts==================
Route::get('/admin/addpost', 'Backend\PostsController@create')->name('addpost');
Route::post('/store/post', 'Backend\PostsController@store')->name('store.post');
Route::get('/admin/allposts', 'Backend\PostsController@index')->name('allposts');
// Route::get('/delete/category/{id}', 'Backend\CategoryController@destroy')->name('delete.category');
// Route::get('/edit/category/{id}', 'Backend\CategoryController@edit');
// Route::post('/update/category/{id}', 'Backend\CategoryController@update')->name('update.category');


//as a guest user post
Route::get('/guest/post', 'frontend\ExtraController@guestUser')->name('guest-user');


//Frontend =====================================

//language------
Route::get('/lang/english', 'Frontend\ExtraController@English')->name('lang.english');
Route::get('/lang/bangla', 'Frontend\ExtraController@Bangla')->name('lang.bangla');

//all pages
Route::get('/about-page', 'Frontend\ExtraController@about')->name('about.page');
Route::get('/all-properties', 'Frontend\ExtraController@properties')->name('allproperties');
Route::post('/store/userpost', 'Frontend\ExtraController@store')->name('store.userpost');
Route::get('/contact-us', 'Frontend\ExtraController@contact')->name('contact-us');