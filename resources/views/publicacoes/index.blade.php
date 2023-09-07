@extends('layouts.app')
@section('title', 'Listagem dos usuários')
@section('content')
    <h1>
        Publicações
    </h1>
    <form action="{{ route('usuarios.index') }}" method="get">
        <input type="text" name="search" placeholder="Pesquisar">
        <button>Pesquisar</button>
    </form>

    <ul>
        {{--    variável $usuarios recebida do controller via compact--}}
        @foreach($publicacoes as $publicacao)
            <li>
                {{$publicacao->postagem}} -
                {{$publicacao->data}}
            </li>
        @endforeach
    </ul>

@endsection
