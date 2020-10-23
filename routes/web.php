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
    return view('home');
});

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/tipsters', [App\Http\Controllers\Api\TipsterController::class, 'index'])
	->name('tipsters.index');

Route::get('/admin/tipsters/{id}', [App\Http\Controllers\Api\TipsterController::class, 'show'])
	->name('tipsters.show');

Route::get('/admin/tips/{tipster:tipster_id}', [App\Http\Controllers\Api\TipController::class, 'show'])
	->name('tips.show');

Route::get('/admin/stats/{tipster:tipster_id}', [App\Http\Controllers\Api\TipController::class, 'showStats'])
	->name('tips.showStats');