<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HelloController;

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
/*練習1-2
Route::get('home',function(){
    return view('home');
});
*/
/*練習1-6
Route::get('home',function(){
    return view('home.index');
});
*/
//練習1-8
Route::get('home', [HomeController::class, 'index']);

Route::get('hello/{name?}', [HelloController::class, 'index'])->name('hello.index');
