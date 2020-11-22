<?php

use App\Http\Controllers\KatalogController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReviewController;

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

Route::resource('katalogs', KatalogController::class);
Route::get('', [KatalogController::class, 'index']);
Route::get('/katalogs', [KatalogController::class, 'index']);
Route::get('/katalogs/create', [KatalogController::class, 'create']);
Route::get('/katalogs', [KatalogController::class, 'store']);
Route::get('/katalogs/{id}', [KatalogController::class, 'show']);
Route::get('/katalogs/{id}/edit', [KatalogController::class, 'edit']);
Route::put('/katalogs/{id}', [KatalogController::class, 'update']);
Route::delete('/katalogs/{id}', [KatalogController::class, 'destroy']);

Route::get('orders/create', [ OrderController::class, 'create' ]);
Route::post('orders/store', [ OrderController::class, 'store' ]);
 
Route::get('reviews/create', [ ReviewController::class, 'create' ]);
Route::post('reviews/store', [ ReviewController::class, 'store' ]);

