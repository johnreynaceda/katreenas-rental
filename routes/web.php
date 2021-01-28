<?php

use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('layouts.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/boarder', function () {
    return view('admin.boarder');
})->name('boarder');
Route::middleware(['auth:sanctum', 'verified'])->get('/room', function () {
    return view('admin.room');
})->name('room');
Route::middleware(['auth:sanctum', 'verified'])->get('/appliance', function () {
    return view('admin.appliance');
})->name('appliance');
Route::middleware(['auth:sanctum', 'verified'])->get('/logs', function () {
    return view('admin.log');
})->name('logs');
Route::middleware(['auth:sanctum', 'verified'])->get('/payments', function () {
    return view('admin.payments');
})->name('payments');
Route::middleware(['auth:sanctum', 'verified'])->get('/user', function () {
    return view('admin.user');
})->name('user');
Route::middleware(['auth:sanctum', 'verified'])->get('/log-print', function () {
    return view('admin.print');
})->name('print');
