<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){

        return view('posts.index', [

        'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(1),
        'categories' => Category::all(),
        'currentCategory' => Category::where('slug', request('category'))->first()
        ]);
    }

    public function showPost(Post $post){

        return view('posts.show', [
            'post' => $post
        ]);
    }

}
