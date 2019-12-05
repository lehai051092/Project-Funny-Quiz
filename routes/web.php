<?php

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

use App\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $categories = Category::all();
    return view('index', compact('categories'));
})->name('index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('categories')->group(function (){
    Route::get('/list','CategoryController@getALL')->name('categories.list');
    Route::get('/create','CategoryController@create')->name('categories.create');
    Route::post('/store','CategoryController@store')->name('categories.store');
    Route::get('/{id}/delete','CategoryController@destroy')->name('categories.destroy');
});
