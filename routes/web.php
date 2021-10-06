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
        Route::get('/show/{slug}', [SchoolController::class, 'show'])->name('show');
        Route::get('/new', [SchoolController::class, 'create'])->name('new');
        Route::get('/edit/{slug}', [SchoolController::class, 'edit'])->name('edit');
        Route::get('/delete/{slug}', [SchoolController::class, 'destroy'])->name('delete');

        Route::post('/create', [SchoolController::class, 'store'])->name('create');
    });

    Route::name('student.')->prefix('student')->group(function() {
        Route::get('/', [StudentController::class, 'index'])->name('index');
        Route::get('/show/{slug}', [StudentController::class, 'show'])->name('show');
        Route::get('/new', [StudentController::class, 'create'])->name('new');
        Route::get('/edit/{slug}', [StudentController::class, 'edit'])->name('edit');
        Route::get('/delete/{slug}', [StudentController::class, 'destroy']);

    });

    Route::name('class.')->prefix('class')->group(function() {
        Route::get('/', [SchoolClassController::class, 'index'])->name('index');
        Route::get('/show/{slug}', [SchoolClassController::class, 'show'])->name('show');
        Route::get('/new', [SchoolClassController::class, 'create'])->name('new');
        Route::get('/edit/{slug}', [SchoolClassController::class, 'edit'])->name('edit');
        Route::get('/delete/{slug}', [SchoolClassController::class, 'destroy']);

    });

});