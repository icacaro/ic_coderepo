@extends('layouts.app')
@section('title', 'Novo usuário')
@section('content')
<h1>Novo Usuário</h1>

@if($errors->any())

@endif
    <form action="{{ route('usuarios.store') }}" method="post">
        @csrf
        <input type="text" name="nome" placeholder="Nome:">
        <input type="email" name="email" placeholder="E-mail:">
        <input type="text" name="perfil_usuario" placeholder="Tipo de perfil:">
        <input type="password" name="password" placeholder="Password:">
        <button type="submit">
            enviar
        </button>
    </form>
<br>
<a href="{{ route('usuarios.index') }}">voltar</a>
@endsection
