<?php

namespace App\Http\Controllers;

use App\Models\Usuario;


class UsuarioController extends Controller
{
    public function index ()
    {
        $usuarios = Usuario::get();
        return view ('usuarios.index', compact('usuarios'));
    }
    public function show ($id)
    {
        if (!$usuario = Usuario::find($id))
            return redirect()->route('usuarios.index');
        return view ('usuarios.show', compact('usuario'));
    }
    public function create ()
    {
        return view ('usuarios.create');
    }

}
