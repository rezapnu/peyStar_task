<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PanelController;

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

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('panel/logout', [PanelController::class, 'panel_logout']);

Auth::routes();

Route::get('/', [PanelController::class, 'index'])->middleware('auth');

Route::group(['middleware' => ['auth'],'prefix' => 'panel'], function () {
    Route::get('user/list', [PanelController::class, 'userList']);
    Route::post('user/create', [PanelController::class, 'userCreate']);
    Route::post('user/update', [PanelController::class, 'userUpdate']);
    Route::get('user/delete/{id}', [PanelController::class, 'userDelete']);

    Route::get('customer/list', [PanelController::class, 'customerList']);
    Route::post('customer/create', [PanelController::class, 'customerCreate']);
    Route::post('customer/update', [PanelController::class, 'customerUpdate']);
    Route::get('customer/delete/{id}', [PanelController::class, 'customerDelete']);

    Route::get('lottery/new', [PanelController::class, 'lottoryNew']);

});

