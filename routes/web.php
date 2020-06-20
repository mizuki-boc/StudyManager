<?php

use App\Http\Controllers\HomeController;
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
Route::group(['middleware' => 'auth'], function() {
    Route::get('/', 'HomeController@home')->name('home');

    Route::post('/study', 'HomeController@study');

    Route::get('/result', 'HomeController@showResult')->name('result');

    Route::get('/history', 'HomeController@showHistory')->name('history');

    Route::get('/{id}/delete', 'HomeController@showDeleteForm')->name('delete');
});

Auth::routes();