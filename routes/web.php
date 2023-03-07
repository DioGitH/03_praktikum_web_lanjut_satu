<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('product')-> group(function(){
    Route::get('/product1', [App\Http\Controllers\ProductController::class, 'product'])->name('product');
    Route::get('/product2', [App\Http\Controllers\ProductController::class, 'product2'])->name('product2');
    Route::get('/product3', [App\Http\Controllers\ProductController::class, 'product3'])->name('product3');
});

Route::get('/news/{title}', [App\Http\Controllers\NewsController::class, 'news'])-> name('news');

Route::prefix('program')->group(function () {
    Route::get('/program1', [App\Http\Controllers\ProgramController::class, 'program'])->name('program');
    Route::get('/program2', [App\Http\Controllers\ProgramController::class, 'program2'])->name('program2');
    Route::get('/program3', [App\Http\Controllers\ProgramController::class, 'program3'])->name('program3');
});

Route::get('/about-us', [App\Http\Controllers\AboutUsController::class, 'aboutUs'])->name('about-us');

Route::resource('contact-us', ContactUsController::class);