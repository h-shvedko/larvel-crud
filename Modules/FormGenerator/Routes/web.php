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

Route::prefix('formgenerator')->group(function() {
    Route::get('/', 'FormGeneratorController@index')->name('index');
    Route::get('/create', 'FormGeneratorController@create')->name('create');
    Route::get('/list', 'FormGeneratorController@show')->name('show');
    Route::get('/edit/{id}', 'FormGeneratorController@edit')->name('edit');
    Route::get('/remove/{id}', 'FormGeneratorController@remove')->name('remove');
});
