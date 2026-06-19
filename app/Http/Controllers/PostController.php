<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // READ: Mostrar todos los artículos
   public function index()
    {
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }

    // CREATE: Mostrar formulario de crear
    public function create()
    {
        return view('posts.create');
    }

    // STORE: Guardar el nuevo artículo
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'contenido' => 'required|string',
            'autor' => 'required|string|max:255',
            'categoria' => 'required|string|max:255',
        ]);

        Post::create($request->all());

        return redirect()->route('posts.index')
            ->with('success', 'Artículo creado correctamente.');
    }

    // EDIT: Mostrar formulario de edición
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    // UPDATE: Actualizar el artículo
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'contenido' => 'required|string',
            'autor' => 'required|string|max:255',
            'categoria' => 'required|string|max:255',
        ]);

        $post->update($request->all());

        return redirect()->route('posts.index')
            ->with('success', 'Artículo actualizado correctamente.');
    }

    // DELETE: Eliminar artículo
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')
            ->with('success', 'Artículo eliminado correctamente.');
    }
}
