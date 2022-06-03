<?php

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
[App\Http\Controllers\HelloController::class, 'index'])->name('index');
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('hello',function(){return view('hello.index');});
Route::get('/hello/other', [App\Http\Controllers\HelloController::class, 'other'])->name('other');
// Route::get('hello',function(){
//     return '<html><body><h1>Hello</h1><p>This is sample page.</p></body></html>';
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
