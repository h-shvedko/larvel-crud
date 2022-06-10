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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home')
    ->middleware('roles:user');

//Users administration module
Route::get('/users', [App\Http\Controllers\UsersController::class, 'index'])
    ->name('users.index')
    ->middleware('roles:super_admin,admin');
Route::get('/user/{id}', [App\Http\Controllers\UsersController::class, 'edit'])
    ->name('users.edit')
    ->middleware('roles:super_admin,admin');
Route::get('/user/{id}/remove', [App\Http\Controllers\UsersController::class, 'destroy'])
    ->name('users.remove')
    ->middleware('roles:super_admin,admin');

//Profile module
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])
    ->name('profile.index')
    ->middleware('roles:user');
Route::get('/profile/edit/{id}', [App\Http\Controllers\ProfileController::class, 'edit'])
    ->name('profile.edit')
    ->middleware('roles:user');
Route::get('/profile/save', [App\Http\Controllers\ProfileController::class, 'index'])
    ->name('profile.redirect')
    ->middleware('roles:user');
Route::post('/profile', [App\Http\Controllers\ProfileController::class, 'save'])
    ->name('profile.save')
    ->middleware('roles:user');
