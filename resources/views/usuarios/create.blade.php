@extends('layouts.app')
@section('title', 'Novo usuário')
@section('content')
<h1>Novo Usuário</h1>
    <form action="{{ route('usuarios.store') }}" method="post">
        @csrf
        <input type="text" name="nome" placeholder="Nome:">
        <input type="email" name="email" placeholder="E-mail:">
        <input type="password" name="password" placeholder="Password:">
        <button type="submit">
            enviar
        </button>
    </form>
@endsection
