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

Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('/login', [App\Http\Controllers\LoginController::class, 'store'])->name('login.store');
Route::post('/logout', [App\Http\Controllers\LoginController::class, 'destroy'])->name('logout');


Route::resource('/Register', App\Http\Controllers\RegisterController::class)->names([
    'index' => 'register.index',
    'store' => 'register.store',
]);

Route::middleware(['auth'])->group(function(){
    Route::resource('/dashboard', App\Http\Controllers\admin\DashboardController::class);
    Route::resource('/inventaris', App\Http\Controllers\inventarisController::class);
});

Route::middleware(['auth', 'supervisor'])->group(function(){
    Route::get('/supervisor/dashboard', [App\Http\Controllers\supervisor\SupervisorController::class, 'index'])->name('supervisor.dashboard');
    Route::resource('/supervisor/users', App\Http\Controllers\supervisor\UserManagementController::class, ['as' => 'supervisor']);
});
