<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Auth;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{

    public function index(): View
    {
        $posts = Post::all();

        $filtro = $posts->filter(function ($post){
            return Gate::allows('view-post', $post);
        });

        return view('post.index', ['posts' => $filtro]);
    }


    public function create(): View
    {
        return view('post.create');
    }

    public function store(PostRequest $request): RedirectResponse
    {

        // Sacamos los datos validados del Form Request
        $data = $request->validated();

        // Si contiene algo devuelve true, si no devuelve false
        $data['caducable'] = isset($data['caducable']);
        $data['comentable'] = isset($data['comentable']);

        // Sacamos el id del usuario que esta autenticado
        $data['user_id'] = Auth::user()->id;

        Post::create($data);

        return redirect()->route('post.create');
    }

    public function show(Post $post): View
    {
        return view('post.show', compact('post'));
    }

    public function edit(Post $post): View 
    {
        return view('post.edit', compact('post'));
    }


    public function update(PostRequest $request, Post $post): RedirectResponse
    {
        // Sacamos los datos validados del Form Request
        $data = $request->validated(); 

        $data['comentable'] = isset($data['comentable']);
        $data['caducable'] = isset($data['caducable']);

        $post->update($data);

        return redirect()->route('post.index');
    }


    public function destroy(Post $post): RedirectResponse
    {
        $post->delete();

        return redirect()->route('post.index');
    }
}