<?php

use App\Http\Controllers\UserController;
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

Route::match(['get', 'post'], '/', [UserController::class, 'home'])->name('paciente.home');

Route::prefix('paciente')->group(function () {
    Route::match(['get', 'post'], '', [UserController::class, 'index'])->name('paciente.index');
    Route::match(['get', 'post'], '/create', [UserController::class, 'create'])->name('paciente.create');
    Route::match(['get', 'post'], '/store', [UserController::class, 'store'])->name('paciente.store');
    Route::delete('/{id}', [UserController::class, 'destroy'])->name('paciente.destroy');
    Route::match(['get', 'post'], '/edit/{id}', [UserController::class, 'edit'])->name('paciente.edit');
    Route::match(['get', 'post'], '/view/{id}', [UserController::class, 'view'])->name('paciente.view');
    Route::put('/update/{id}', [UserController::class, 'update'])->name('paciente.update');
});
