@extends('layouts.app')
@section('title', 'Listagem dos usuários')
@section('content')
    <h1>
        Listagem de usuários
        (<a href=" {{ route('usuarios.create') }}"> + </a>)
    </h1>

    <ul>
        {{--    variável $usuarios recebida do controller via compact--}}
        @foreach($usuarios as $usuario)
            <li>
                {{$usuario->nome}} -
                {{$usuario->email}} | <a href="{{ route('usuarios.show', $usuario->id)  }}"> Detalhes</a>
            </li>
        @endforeach
    </ul>

@endsection
