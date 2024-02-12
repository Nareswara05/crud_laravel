<?php

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

Route::get('login', [LoginController::class, 'index']);
Route::get('register', [RegisterController::class, 'index']);
Route::get('register', [RegisterController::class, 'store']);


Route::group(["prefix" => "/student"], function(){
    Route::get('/all', [StudentsController::class, 'index']);
    Route::get('/detail/{student}', [StudentsController::class, 'show']);
    Route::get('/create', [StudentsController::class, 'create']);
    Route::post('/add', [StudentsController::class, 'store']);
    Route::get('/edit/{student}', [StudentsController::class, 'edit']);
    Route::put('/update/{student}', [StudentsController::class, 'update']);
    Route::delete('/delete/{student}', [StudentsController::class, 'destroy']);
});

Route::group(["prefix" => "/kelas"], function(){
    Route::get('/all', [KelasController::class, 'index']);
    Route::get('/detail{student}', [KelasController::class, 'show']);
    Route::get('/create', [KelasController::class, 'create']);
    Route::post('/add', [KelasController::class, 'store']);
    Route::get('/edit/{student}', [KelasController::class, 'edit']);
    Route::put('/update/{student}', [KelasController::class, 'update']);
    Route::delete('/delete/{student}', [KelasController::class, 'destroy']);
});




    



