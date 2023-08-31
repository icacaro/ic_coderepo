<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuarioStoreUpdateFormRequest;
use App\Models\User;
use App\Models\Usuario;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


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

    public function store (UsuarioStoreUpdateFormRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        $usuario = Usuario::create($data);

        return redirect()->route('usuarios.index');
    }

}
