<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth')->except(['show','index']);
    }

    public function index(User $user)
    {
        // dd($user->username);
        // dd(auth()->user());

        $posts = Post::where('user_id',$user->id)->paginate(20);
        // dd($posts);
        return view('layouts.dashboard', compact('user','posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,
        [
            'titulo' => 'required|max:255',
            'descripcion' => 'required',
            'imagen' => 'required',
        ]);

        Post::create([
        'titulo' => $request->titulo,
        'descripcion' => $request->descripcion,
        'imagen' => $request->imagen,
        'user_id' => auth()->user()->id
        ]);

    // otra forma de crear registros
    // $post = new Post;
    // $post->titulo = $request->titulo;
    // $post->descripcion = $request->descripcion;
    // $post->imagen = $request->imagen;
    // $post->user_id = auth()->user()->id;

    // $post->save();

    // tercera forma
    // $request->user()->posts()->create([
    //     'titulo' => $request->titulo,
    //     'descripcion' => $request->descripcion,
    //     'imagen' => $request->imagen,
    // ]);

    return redirect()->route('posts.index', auth()->user()->username);

    }

    public function show(User $user, Post $post)
    {
        return view('post.show', compact('post','user'));
    }


    public function destroy(Post $post)
    {

        $this->authorize('delete',$post);
        $post->delete();

        // eliminar la imagen
        $imagen_path = public_path('uploads/' . $post->imagen);

        if(File::exists($imagen_path)){
            unlink($imagen_path);
        }
        return redirect()->route('posts.index', auth()->user()->username);

    }
}
