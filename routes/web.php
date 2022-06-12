<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\FollowerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PerfilController;

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

Route::get('/',HomeController::class)->name('home');


Route::get('/register',[RegisterController::class,'index'])->name('register.index');
Route::post('/register',[RegisterController::class,'store'])->name('register.store');

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store']);

Route::post('/logout',[LogoutController::class,'store'])->name('logout');

// route model binding
// Route::get('/muro',[PostController::class,'index'])->name('posts.index');

Route::get('/posts/create',[PostController::class,'create'])->name('post.create');
Route::post('/posts',[PostController::class,'store'])->name('posts.store');




// eliminar post
Route::delete('/posts/{post}',[PostController::class,'destroy'])->name('posts.destroy');

// subir imagenes
Route::post('/imagen',[ImagenController::class,'store'])->name('imagenes.store');


// likes a las fotos
Route::post('/posts/{post}/likes',[LikeController::class,'store'])->name('posts.likes.store');
Route::delete('/posts/{post}/likes',[LikeController::class,'destroy'])->name('posts.likes.destroy');

// perfil
Route::get('/editar-perfil', [PerfilController::class,'index'])->name('perfil.index');
Route::post('/editar-perfil', [PerfilController::class,'store'])->name('perfil.store');

// guardar comentarios
Route::post('/{user:username}/posts/{post}',[ComentarioController::class,'store'])->name('comentarios.store');
Route::get('/{user:username}/posts/{post}', [PostController::class,'show'])->name('posts.show');
Route::get('/{user:username}',[PostController::class,'index'])->name('posts.index');

// siguiendo usuarios
Route::post('/{user:username}/follow', [FollowerController::class,'store'])->name('users.follow');
Route::delete('/{user:username}/unfollow', [FollowerController::class,'destroy'])->name('users.unfollow');