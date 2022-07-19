<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminManagementController;

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
    return view('welcome',['notFound' => false]);
});

Route::get('/admin', function () {
    return view('admin');
});

Route::controller(AdminManagementController::class)->group(function () {
    Route::get('/admin-management', 'index');
    Route::delete('/admin-management/link/delete/{id}', 'delete');
});

Route::get('/admin-management', 'App\Http\Controllers\AdminManagementController@index')->name('admin.management');

Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('/');
})->name('logout');

Route::get('{slug}', 'App\Http\Controllers\ShortenLinkController@index')->name('short.link');


