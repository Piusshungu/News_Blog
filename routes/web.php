<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PostCommentsController;


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

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('posts/{post:slug}', [PostController::class, 'showPost']);


Route::get('categories/{category:slug}', function(Category $category){
    return view('posts.index', [
        'posts' => $category->posts,
        'categories' => Category::all(),
        'currentCategory' => $category
    ]);
});

Route::get('register', [RegisterController::class, 'userRegistration'])->middleware('guest');

Route::post('register', [RegisterController::class, 'storeUser'])->middleware('guest');

Route::get('login', [SessionController::class, 'userLogin'])->middleware('guest');

Route::post('login', [SessionController::class, 'createSession'])->middleware('guest');

Route::post('logout', [SessionController::class, 'destroySession'])->middleware('auth');

Route::post('posts/{post:slug}/comments' , [PostCommentsController::class, 'store']);


