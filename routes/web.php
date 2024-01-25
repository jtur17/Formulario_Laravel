<?php

use App\Http\Controllers\PostController;
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

Route::redirect('/post', '/post/create');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/post/store',[PostController::class, 'store'])->name('post.store');
Route::put('/post/update/{post}', [PostController::class, 'update'])->name('post.update');

Route::resource('/post', PostController::class)->names([
    'index' => 'post.index',
    'create' => 'post.create',
    // 'store' => 'post.store',
    'show' => 'post.show',
    // 'update' => 'post.update'
]);

require __DIR__.'/auth.php';
