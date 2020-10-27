<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */
Route::get('home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('tipsters', [App\Http\Controllers\Api\TipsterController::class, 'index']);
Route::get('tips/{tipster:tipster_id}', [App\Http\Controllers\Api\TipController::class, 'show']);
Route::get('stats/{tipster:tipster_id}', [App\Http\Controllers\Api\TipController::class, 'showStats']);


Route::middleware('auth:api')->get('/user', function (Request $request) {
   return $request->user();

   $response = $client->request('GET', '/api/user?api_token='. $token);

   $response = $client->request('GET', '/api/admin/tipsters');
});


/*
Route::group(['middleware' => 'auth:api'], function(){
	
	Auth::routes();

	Route::get('/admin/tipsters/{id}', [App\Http\Controllers\Api\TipsterController::class, 'show'])
		->name('tipsters.show');

	Route::get('/admin/tips/{tipster:tipster_id}', [App\Http\Controllers\Api\TipController::class, 'show'])
		->name('tips.show');

	Route::get('/admin/stats/{tipster:tipster_id}', [App\Http\Controllers\Api\TipController::class, 'showStats'])
		->name('tips.showStats');
 });

 */