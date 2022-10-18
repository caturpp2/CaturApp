<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Post;
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
    return view('welcome');
});

Route::get('/dashboard', function () {

    $data = Post::orderBy('id','DESC')->get();
    
    return view('dashboard', compact('data'));

    // return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

// module user
Route::get('/user',[UserController::class, 'index'])->name('user');
Route::get('/user/create',[UserController::class, 'create']);
Route::post('/user/store',[UserController::class, 'store']);
Route::get('/user/{id}/edit',[UserController::class, 'edit']);
Route::put('/user/{id}',[UserController::class, 'update']);
Route::delete('/user/{id}',[UserController::class, 'destroy']);

// Module Category
Route::get('/category',[CategoryController::class, 'index']);
Route::get('/category/create',[CategoryController::class, 'create']);
Route::post('/category/store',[CategoryController::class, 'store']);
Route::get('/category/{id}/edit',[CategoryController::class, 'edit']);
Route::put('/category/{id}',[CategoryController::class, 'update']);
Route::delete('/category/{id}',[CategoryController::class, 'destroy']);

// Module Post
Route::get('/post',[PostController::class, 'index'])->name('post');
Route::get('/post/create',[PostController::class, 'create']);
Route::post('/post/store',[PostController::class, 'store']);
Route::get('/post/{id}/edit',[PostController::class, 'edit']);
Route::put('/post/{id}',[PostController::class, 'update']);
Route::delete('/post/{id}',[PostController::class, 'destroy']);

