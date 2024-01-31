<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified', 'logged'])->name('dashboard');

Route::middleware(['auth', 'verified', 'logged'])->group(function() {
    Route::get('/dashboard', function () { return view('dashboard'); 
    })->name('dashboard');

    Route::get('/admins/role', [RoleController::class, 'index'])->name('role.index');
    Route::post('/admins/role', [RoleController::class, 'store'])->name('role.store');
    Route::delete('/admins/role', [RoleController::class, 'destroy'])->name('role.destroy');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
