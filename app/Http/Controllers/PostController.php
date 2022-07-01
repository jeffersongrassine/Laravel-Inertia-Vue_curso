<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostResquest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // sleep(3);

        $posts = Post::all();

        return inertia('Dashboard', compact('posts'));
    }

    public function create()
    {
        return inertia('Create');
    }

    public function store(StorePostResquest $request)
    {
        Post::create($request->validated());

        return redirect()->route('dashboard')->with('message', 'Post criado com sucesso!');
    }

    public function edit($id)
    {
        $post = Post::find($id);

        return inertia('Edit', compact('post'));
    }
    

    public function update($id, StorePostResquest $request)
    {
        $post = Post::findOrFail($id);

        $post->update($request->validated());

        return redirect()->route('dashboard')->with('message', 'Post editado com sucesso!');


    }


    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('dashboard')->with('message', 'Post excluído com sucesso!');
    }
}
