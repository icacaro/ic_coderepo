@extends('layouts.app')
@section('title', "Listagem do usuário $publicacao->titulo" )
@section('content')
    <h1>{{ $publicacao->titulo }} </h1>
    <ul>
        <li>{{ $publicacao->postagem }}</li>
        <li>{{ $publicacao->data }}</li>
    </ul>
    <a href="{{ route('publicacoes.index') }}">voltar</a>
@endsection
