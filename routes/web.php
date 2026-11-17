<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route Admin Dashboard
Route::get('/admin', [DashboardController::class, 'index'])
    ->name('admin.dashboard');

// Route CRUD Barang (Resource Controller)
Route::resource('barang', BarangController::class);