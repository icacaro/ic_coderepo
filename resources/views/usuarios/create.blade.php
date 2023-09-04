@extends('layouts.app')
@section('title', 'Novo usuário')
@section('content')
<h1>Novo Usuário</h1>

@if($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li class="error">{{ $error }}</li>
        @endforeach
    </ul>
@endif
    <form action="{{ route('usuarios.store') }}" method="post">
        @csrf
        <input type="text" name="nome" placeholder="Nome:" value="{{ old('nome') }}">
        <input type="email" name="email" placeholder="E-mail:" value="{{ old('email') }}">
        <input type="text" name="perfil_usuario" placeholder="Tipo de perfil:" value="{{ old('perfil_usuario') }}">
        <input type="password" name="password" placeholder="Password:">
        <button type="submit">
            enviar
        </button>
    </form>
<br>
<a href="{{ route('usuarios.index') }}">voltar</a>
@endsection
