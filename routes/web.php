<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServicesController;
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
    return view('index');
});

Route::resource('portfolio', PortfolioController::class);

Route::get('/admin/login', [AdminController::class, 'login']);
Route::get('/admin/register', [AdminController::class, 'register']);
Route::get('/admin/forgot', [AdminController::class, 'forgot']);
Route::get('/admin/index', [AdminController::class, 'index']);
Route::get('/admin/recoverpassword', [AdminController::class, 'recoverpassword']);
Route::get('/admin/services', [AdminController::class, 'services']);
Route::get('/admin/services_add', [AdminController::class, 'services_add']);

Route::resource('services', ServicesController::class);


