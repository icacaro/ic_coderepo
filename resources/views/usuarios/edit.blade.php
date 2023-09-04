@extends('layouts.app')
@section('title', "Editar Usuário $usuario->nome")
@section('content')
    <h1>Editar Usuário {{ $usuario->nome }}</h1>

    @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li class="error">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('usuarios.update', $usuario->id) }}" method="post">
        @method('PUT')
        @csrf
        <input type="text" name="nome" placeholder="Nome:" value="{{ $usuario->nome }}">
        <input type="email" name="email" placeholder="E-mail:" value="{{ $usuario->email }}">
        <input type="text" name="perfil_usuario" placeholder="Tipo de perfil:" value="{{ $usuario->perfil_usuario }}">
        <input type="password" name="password" placeholder="Password:">
        <button type="submit">
            enviar
        </button>
    </form>
    <br>
    <a href="{{ route('usuarios.index') }}">voltar</a>
@endsection
