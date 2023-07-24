<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SessionController;
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

Route::middleware(['guest'])->group(function () {
    Route::get('/', [SessionController::class, 'index']);
    Route::post('/', [SessionController::class, 'login']);
});

Route::get('/home', function() {
    return redirect('/admin');
});

Route::get('/admin', [AdminController::class, 'index']);
