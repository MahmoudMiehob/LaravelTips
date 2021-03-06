<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\HttpClientController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/posts',[HttpClientController::class , 'getAllPost'])->name('posts');

Route::get('/post/{id}',[HttpClientController::class , 'showPost'])->name('post');

Route::get('/add-post',[HttpClientController::class , 'addPost'])->name('addPost');

Route::get('/update-post',[HttpClientController::class , 'updatePost'])->name('posts.update');

Route::get('/delete-post/{id}',[HttpClientController::class , 'deletePost'])->name('posts.delete');







