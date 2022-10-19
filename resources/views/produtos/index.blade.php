@extends('layout.app')

@section('estilo')
<script src="https://cdn.tailwindcss.com"></script>
@endsection

@section('titulos')
<h1 class="px-5 py-3">{{(!isset($categoria) ? 'Meus Produtos': $categoria->nome)}}</h1>
@if(!isset($categoria))
@else
<a class="my-2 mx-2 align-items-center text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded text-sm w-1/2 sm:w-auto px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800" href="{{route('categorias.edit', ['categoria' => $categoria])}}"> Editar</a>
<form action="{{route('categorias.destroy', ['categoria' => $categoria] )}}" method="POST" class="mx-1">
    @method('delete')
    @csrf
    <button class="my-2 mx-2 align-items-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded text-sm w-1/2 sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Eliminar</button>
</form>
@endif
<a href="/produtos/create" class="my-2 mx-2 align-items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded text-sm w-1/2 sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cadastrar</a>
@endsection

@section('content')
<div class="lista">
    @foreach($produtos as $produto)

    <div class="produto text-center rounded bg-gradient-to-r from-cyan-500 to-blue-500 py-2 px-2 text-white">
        <h4 class="text-2xl">{{$produto->nome}}</h4>
        <div class="imagem">
            <img class="img" src="{{@asset($produto->url)}}" alt="">
        </div>


        <p class="font-bold">Preco: {{$produto->preco}}</p>
        <p>Marca: {{$produto->marca}}</p>
        <p>Categoria: {{$produto->categorias_id->nome}}</p>
        <p class="">Descricao: {{$produto->descricao}}</p>
        <a class="my-2 mx-5 align-items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded text-sm w-1/2 sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" href="{{route('produtos.show', ['produto' => $produto])}}"> Ver </a>
    </div>
    @endforeach
</div>

@endsection

@section('css')
<style>
    .imagem {
        border-radius: 10px;
        margin: 10px;
        width: auto;
        max-height: 150px;
        display: flex;
        justify-content: center;
    }

    .img {
        width: auto;
        height: 150px;
    }

    .produto {
        display: flex;
        flex-direction: column;
        justify-content: center;
        object-fit: contain;
        width: 225px;
        margin-right: 20px;
        margin-bottom: 20px;
    }

    .lista {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        width: 80%;
        justify-content: start;
    }
</style>
@endsection