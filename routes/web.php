<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\BlogWebController;
use App\Http\Controllers\PostDetailsController;
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

Route::get('/index', [IndexController::class, 'index'])->name('index');
Route::get('/AboutUs', [AboutUsController::class, 'index'])->name('AboutUs');
Route::get('/ContactUs', [ContactUsController::class, 'index'])->name('ContactUs');
Route::get('/PostDetails', [PostDetailsController::class, 'index'])->name('PostDetails');
Route::get('/BlogWeb', [BlogWebController::class, 'index'])->name('BlogWeb');

