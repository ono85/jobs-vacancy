<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
//Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/company/login', [App\Http\Controllers\HomeController::class, 'index'])->name('company.login');
Route::get('/company/logout', [App\Http\Controllers\HomeController::class, 'index'])->name('company.logout');
Route::get('/company/register', [App\Http\Controllers\HomeController::class, 'index'])->name('company.register');
Route::get('/company/jobs', [App\Http\Controllers\HomeController::class, 'index'])->name('company.jobs');
Route::get('/company/jobs/{id}', [App\Http\Controllers\HomeController::class, 'index'])->name('company.job');
Route::post('/company/job/create', [App\Http\Controllers\HomeController::class, 'index'])->name('company.job.create');
Route::post('/company/job/edit', [App\Http\Controllers\HomeController::class, 'index'])->name('company.job.edit');
Route::delete('/company/job/delete', [App\Http\Controllers\HomeController::class, 'index'])->name('company.delete');
