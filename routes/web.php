<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Kelas;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StudentsController;
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






Route::get('/', [StudentsController::class, 'home']);
Route::get('home', [StudentsController::class, 'home']);
Route::get('about', [StudentsController::class, 'about']);


Route::group(["prefix"=>"/login"], function(){
    Route::get('/index', [AuthController::class, 'showLoginForm']);
    Route::post('/index', [AuthController::class, 'login'])->name('login');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
})->middleware('guest');


Route::group(["prefix"=>"/register"], function(){
    Route::get('/index', [AuthController::class, 'showRegisterForm'])->name('register.index');
    Route::post('/index', [AuthController::class, 'register']);
})->middleware('guest');




Route::group(['middleware' => 'checkLogin', 'prefix' => '/student'], function () {
    Route::get('/all', [StudentsController::class, 'index'])->name('all');
    Route::get('/detail/{student}', [StudentsController::class, 'show']);
    Route::get('/create', [StudentsController::class, 'create']);
    Route::post('/add', [StudentsController::class, 'store']);
    Route::get('/edit/{student}', [StudentsController::class, 'edit']);
    Route::put('/update/{student}', [StudentsController::class, 'update']);
    Route::delete('/delete/{student}', [StudentsController::class, 'destroy']);
});

Route::group(['middleware' => 'checkLogin', 'prefix' => '/kelas'], function () {
    Route::get('/all', [KelasController::class, 'index']);
    Route::get('/create', [KelasController::class, 'create']);
    Route::post('/add', [KelasController::class, 'store']);
    Route::get('/edit/{kelas}', [KelasController::class, 'edit']);
    Route::put('/update/{kelas}', [KelasController::class, 'update']);
    Route::delete('/delete/{kelas}', [KelasController::class, 'destroy']);
});





    



