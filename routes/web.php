<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// 使うコントローラの呼び出し
use App\Http\Controllers\TasksController;
use App\Http\Controllers\UsersController;

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

Route::get('/',          [TasksController::class, 'index']);
Route::get('/dashboard', [TasksController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::resource('tasks', TasksController::class)->only(['index', 'show', 'create', 'store', 'edit', 'update', 'destroy']);
    // Route::resource('users', UsersController::class)->only(['show']);
    
    // ↓↓　開発用コード　↓↓ /////////////////////////////////////////////////////////
    // Route::get('/tasks',                      [TasksController::class, 'index']);
    // Route::get('/users',                      [UsersController::class, 'index'])->name('users.index');
    // ↑↑　開発用コード　↑↑ /////////////////////////////////////////////////////////
    
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::fallback(function(){
//     return redirect('/');
//     // abort(404);
// });

require __DIR__.'/auth.php';
