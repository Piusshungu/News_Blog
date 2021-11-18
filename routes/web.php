<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Spatie\YamlFrontMatter\YamlFrontMatter;


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

    $posts = Post::get();

    return view('posts', [
        'posts' => $posts
    ]);

});


Route::get('posts/{post:slug}', function(Post $post) {
    
    return view('post', [
        'post' => $post
    ]);
});
