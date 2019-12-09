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
    return view('index');
})->name('index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('categories')->group(function () {
    Route::get('/list', 'CategoryController@getALL')->name('categories.list');
    Route::get('/create', 'CategoryController@create')->name('categories.create');
    Route::post('/store', 'CategoryController@store')->name('categories.store');
    Route::get('/{id}/delete', 'CategoryController@destroy')->name('categories.destroy');
});

Route::prefix('users')->group(function () {
    Route::get('list', 'UserController@getAll')->name('users.list');
    Route::get('{id}/edit', 'UserController@edit')->name('users.edit');
    Route::post('{id}/update', 'UserController@update')->name('users.update');
    Route::get('{id}/information', 'UserController@information')->name('users.information');
    Route::post('{id}/information', 'UserController@update')->name('users.updateInformation');
    Route::get('change-password', 'UserController@changePassword')->name('users.changePassword');
    Route::post('change-password', 'UserController@updatePassword')->name('users.updatePassword');
});

Route::prefix('questions')->group(function () {
    Route::get('{id}/questionInCategory', 'QuestionController@questionsInCategory')->name('questions.list');
    Route::get('create', 'QuestionController@create')->name('questions.create');
    Route::post('create', 'QuestionController@store')->name('questions.store');
    Route::get('{id}/delete', 'QuestionController@delete')->name('questions.delete');
    Route::get('{id}/edit', 'QuestionController@edit')->name('questions.edit');
    Route::post('{id}/edit', 'QuestionController@update')->name('questions.update');
});
Route::prefix('answers')->group(function () {
    Route::get('{id}/create', 'AnswerController@create')->name('answers.create');
    Route::post('{id}/create', 'AnswerController@store')->name('answers.store');
    Route::get('{id}/delete', 'AnswerController@delete')->name('answers.delete');
    Route::get('{id}/edit', 'AnswerController@edit')->name('answers.edit');
    Route::post('{id}/update', 'AnswerController@update')->name('answers.update');
});
