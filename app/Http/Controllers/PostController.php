<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        sleep(3);

        $posts = Post::all();

        return inertia('Home', compact('posts'));
    }
}
