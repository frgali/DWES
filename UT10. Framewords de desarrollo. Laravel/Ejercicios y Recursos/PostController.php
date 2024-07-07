<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {   
        return view('formulario');
    }
    public function guardar(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect('nuevo')->with('status', 'Nuevo post insertado');
    }
    public function mostrar()
    {
        //$posts = DB::select('select * from posts');
        $posts=Post::all();
        return view('mostrar_posts', ['posts' => $posts]);
    }
    public function borrar(Request $request)
    {
        //$posts = DB::select('select * from posts');
        $post = Post::find($request->id);
        $post->delete();
        $posts=Post::all();
        return view('mostrar_posts', ['posts' => $posts]);
    }
}
