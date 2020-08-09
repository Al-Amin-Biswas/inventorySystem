<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('testCheck','auth\LoginController@gotoPage');
Route::post('checkUser','auth\LoginController@UserCheak');
//----Menu section
Route::get('menu_bar','MenuList\MenuController@index');
Route::get('add_menu','MenuList\MenuController@addMenu');
Route::post('adding_menu','MenuList\MenuController@addingMenu');
Route::get('edit/menu/{id}','MenuList\MenuController@editMenu');
Route::post('update_menu{id}','MenuList\MenuController@menuUpdate');
Route::get('delete/menu{id}','MenuList\MenuController@menuDelete');
//---Sub Menu Section
Route::get('sub_menu','MenuList\MenuController@subIndex');
Route::get('add_sub_menu','MenuList\MenuController@addSubmenu');
Route::post('adding_Submenu','MenuList\MenuController@addingsubMenu');
Route::post('all_Submenu','MenuList\MenuController@AllsubMenu');
