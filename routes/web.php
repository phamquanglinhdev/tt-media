<?php

use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\Client\IndexController;
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

Route::get('/', [IndexController::class,"index"])->name("index");
Route::get('/contact', [ContactController::class,"index"])->name("contact");
Route::post('/contact', [ContactController::class,"store"])->name("contact.store");
