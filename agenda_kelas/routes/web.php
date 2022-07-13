<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\ShowguruController;

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
    return view('login');
});

Route::get('/dashboardguru', function () {
    return view('Tampilguru.dashboard');
});

Route::get('/dashboard', function () {
    return view('layoutt');
});

// LOGIN
Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::post('postlogin', [AuthController::class, 'postlogin'])->name('postlogin'); 
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::group(['middleware' => ['auth']], function () {
        Route::group(['middleware' => ['login:admin']], function () {
            Route::get('admin', [AdminController::class, 'index'])->name('admin',[
                "title" => "Dashboardadmin"]);
        });
        Route::group(['middleware' => ['login:editor']], function () {
            Route::get('editor', [EditorController::class, 'index'])->name('editor',[
                "title" => "Dashboardguru"]);
        });
    });

// GURU 

Route::get('/guru', [GuruController::class, 'index']); 
Route::get('/create-guru', [GuruController::class, 'create'])->name('create-guru'); 
Route::post('/simpan-guru', [GuruController::class, 'store'])->name('simpan-guru'); 
 
 
Route::get('/edit-guru/{id}', [GuruController::class, 'edit'])->name('edit-guru'); 
Route::put('/update-guru/{id}', [GuruController::class, 'update'])->name('update-guru'); 
 
Route::delete('/delete-guru/{id}', [GuruController::class, 'destroy']);

// ROUTE KELAS

Route::get('/kelas', [KelasController::class, 'index']);
Route::get('/create-kelas', [KelasController::class, 'create'])->name('create-kelas');
Route::post('/save-kelas', [KelasController::class, 'store'])->name('simpan-kelas');

Route::get('/edit-kelas/{id}', [KelasController::class, 'edit'])->name('edit kelas');
Route::put('/update-kelas/{id}', [KelasController::class, 'update'])->name('update-kelas');

Route::delete('/delete-kelas/{id}', [KelasController::class, 'destroy']);

// ROUTE AGENDA

Route::get('/agenda', [AgendaController::class, 'index']);

Route::get('/create-agenda', [AgendaController::class, 'create'])->name('create-agenda');
Route::post('/save-agenda', [AgendaController::class, 'store'])->name('simpan-agenda');

Route::get('/edit-agenda/{id}', [AgendaController::class, 'edit'])->name('edit')->name('edit-agenda');
Route::put('/update-agenda/{id}', [AgendaController::class, 'update'])->name('update-agenda');

Route::delete('/delete-agenda/{id}', [AgendaController::class, 'destroy']);

// TAMPILAN GURU

Route::get('/login-guru', [ShowguruController::class, 'index']); 
 
Route::post('/save-guru', [ShowguruController::class, 'store'])->name('save-guru');
