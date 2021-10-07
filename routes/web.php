<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\SchoolClassController;
use App\Http\Controllers\Site\SchoolController;
use App\Http\Controllers\Site\StudentController;
use App\Http\Controllers\Site;
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

Route::namespace('Site')->name('site.')->group(function() {

    Route::get('/', [HomeController::class, '__invoke'])->name('home');

    Route::name('school.')->prefix('school')->group(function () {
        Route::get('/', [SchoolController::class, 'index'])->name('index');
        Route::get('/show/{id}', [SchoolController::class, 'show'])->name('show');
        Route::get('/new', [SchoolController::class, 'create'])->name('new');
        Route::get('/edit/{id}', [SchoolController::class, 'edit'])->name('edit');
        
        Route::post('/create', [SchoolController::class, 'store'])->name('store');
        Route::put('/update/{id}', [SchoolController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [SchoolController::class, 'destroy'])->name('delete');
    });

    Route::name('student.')->prefix('student')->group(function() {
        Route::get('/', [StudentController::class, 'index'])->name('index');
        Route::get('/show/{id}', [StudentController::class, 'show'])->name('show');
        Route::get('/new', [StudentController::class, 'create'])->name('new');
        Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('edit');
        Route::get('/delete/{id}', [StudentController::class, 'destroy']);

        Route::post('/create', [StudentController::class, 'store'])->name('store');
    });

    Route::name('class.')->prefix('class')->group(function() {
        Route::get('/', [SchoolClassController::class, 'index'])->name('index');
        Route::get('/show/{id}', [SchoolClassController::class, 'show'])->name('show');
        Route::get('/new', [SchoolClassController::class, 'create'])->name('new');
        Route::get('/edit/{id}', [SchoolClassController::class, 'edit'])->name('edit');
        Route::get('/delete/{id}', [SchoolClassController::class, 'destroy']);

        Route::post('/create', [SchoolClassController::class, 'store'])->name('store');
    });

});