<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginInstaController;
use App\Models\UserInsta;
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
    return view('login');
});

// Route::get('log', [LoginInstaController::class, 'index']);
Route::post('store', [LoginInstaController::class, 'store'])->name('UserInsta.store');
Route::get('show',[LoginInstaController::class,'show']);
