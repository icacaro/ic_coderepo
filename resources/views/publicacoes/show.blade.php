@extends('layouts.app')
@section('title', "Listagem do usuário $publicacao->titulo" )
@section('content')
    <h1>{{ $publicacao->titulo }} </h1>
    <ul>
        <li>{{ $publicacao->postagem }}</li>
        <li>{{ $publicacao->data }}</li>
        <br>
        <li>
        @if($publicacao->image)
            <img src="{{ asset("storage/{$publicacao->image}")}}" alt="{{$publicacao->titulo}}" style="width: 500px; height: auto;" class="img-fluid">
        @else
        <img src="{{ url("favicon.ico")}}" alt="{{$publicacao->titulo}}">
        @endif
        {{$publicacao->titulo}}
        </li>
        Comentários {{$publicacao->titulo}}
{{--$comentarios['comentarios'] as $comentario: neste código, estamos acessando a chave 'comentarios' no array $comentarios para obter a coleção de comentários--}}
            @if(count($comentarios['comentarios']) > 0)
                @foreach($comentarios['comentarios'] as $comentario)
                    <li>
                        {{$comentario->descricao}}
                        {{$comentario->data_comentario}}                        
                    </li>
                @endforeach
            @else
                <p>Nenhum comentário.</p>
            @endif

    </ul>
    <a href="{{ route('comentarios.create', $publicacao->id)  }}"> comentar publicação </a>

    <br>

    <a href="{{ route('publicacoes.index') }}">voltar</a>
@endsection