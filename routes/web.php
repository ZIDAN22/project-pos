<?php

use App\Http\Controllers\admin\inventarisController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;



Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// })->name('dashboard');


Route::resource('/Register', App\Http\Controllers\RegisterController::class);   
Route::resource('/dashboard', App\Http\Controllers\Dashboard\DashboardController::class);
Route::resource('/inventaris', App\Http\Controllers\admin\inventarisController::class);
Route::middleware(['auth'])->group(function(){
});