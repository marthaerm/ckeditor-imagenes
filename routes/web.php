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
Route::get('/home', function () {
    return view('welcome');
})->name('home');

/**
 * CkEditor
 */
Route::get('/ckeditor-sample', function () {
    return view('ckeditor-sample');
})->name('ckeditor_sample');
Route::post('save-img', 'PostController@save')->name('save-img');
Route::post('save-post', 'PostController@store')->name('save-post');


/**
 * Ajax
 */

Route::get('ajax-sample', function(){
    return view('ajax-sample');
})->name('ajax-sample');

Route::post('ajax-request', 'AjaxController@chooseRandomPet')->name('ajax-request');

Route::post('addition', 'AjaxController@addition')->name('addition');

/**
 * Modal
 */
Route::get('modal-sample', function(){
    return view('modal-sample');
})->name('modal-sample');

Route::get('modal-data/{data}', 'ModalController@show')->name('modal-data');


/**
 * API
 */
Route::get('api-sample', function(){
    return view('api-sample');
})->name('api-sample');
