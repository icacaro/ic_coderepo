<?php

namespace App\Http\Controllers;

use App\Models\Publicacao;
use App\Models\Usuario;
use Illuminate\Http\Request;

class PublicacaoController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::getUsuarios();

        $publicacoes = Publicacao::getPublicacoes();

        return view ('publicacoes.index', compact('usuarios', 'publicacoes'));

    }
}

