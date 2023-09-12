@extends('layouts.app')
@section('title', "Listagem do usuário $publicacao->titulo" )
@section('content')
    <h1>{{ $publicacao->titulo }} </h1>
    <ul>
        <li>{{ $publicacao->postagem }}</li>
        <li>{{ $publicacao->data }}</li>
        <br>
        Comentários {{$publicacao->titulo}}
        @foreach($comentarios as $comentario)
            @if($comentario !== null)
                <li>
                    {{$comentario->descricao}}
                    {{$comentario->data_comentario}}
                </li>
            @else
                <p>Nenhum comentário.</p>
            @endif
        @endforeach
    </ul>
    <a href="{{ route('publicacoes.index') }}">voltar</a>
@endsection
