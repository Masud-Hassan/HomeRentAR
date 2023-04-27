<?php

use App\Http\Controllers\signupController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\dashController;
use Illuminate\Support\Facades\Route;

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

Route::get('/SignUp', [signupController::class, 'index']);
Route::post('/SignUp', [signupController::class, 'store']);

Route::get('/login', [loginController::class, 'index']);
Route::post('/login', [loginController::class, 'verify']);

Route::get('/Dashboard', [dashController::class, 'index']);
Route::get('/postAD', [dashController::class, 'adPost']);
Route::post('/postADStore', [dashController::class, 'adPostStore']);
Route::get('/showOwnPosts', [dashController::class, 'showData']);

Route::get('/', function () {
    return view('welcome');
});
