<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SupervisorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('indexL');
});
Route::get('rolebutton', function () {
    return view('Rolebutton');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
// Route for first login page
Route::get('/login', [CustomAuthController::class, 'showLoginForm'])->name('login');

// supervisor route

Route::get('/supervisor',[SupervisorController::class,'index'])->name('supervisor.index');
Route::post('/supervisor', [SupervisorController::class, 'store'])->name('supervisor.store');
Route::post('/toggle-status/{id}', [SupervisorController::class, 'toggleStatus'])->name('supervisor.toggleStatus');



// Route for second login page
Route::get('/login/admin', [CustomAuthController::class, 'showAdminLoginForm'])->name('admin.login');
// Route for third login page
Route::get('/login/other', [CustomAuthController::class, 'showOtherLoginForm'])->name('other.login');
  Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
