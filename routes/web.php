<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [BlogController::class, 'list']);

Route::get('/create', [BlogController::class,'create']);

Route::post('/store', [BlogController::class, 'store']);

Route::get('/blog/{id}',[BlogController::class, 'show']);

Route::get('/blog/{id}/edit',[BlogController::class, 'edit']);