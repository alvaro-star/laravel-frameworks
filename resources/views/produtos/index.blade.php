@extends('layout.app')

@section('estilo')
<script src="https://cdn.tailwindcss.com"></script>
@endsection

@section('titulos')
<h1 class="px-5 py-3 my-1  rounded">{{(!isset($categoria) ? 'Meus Produtos': $categoria->nome)}}</h1>
@if(!isset($categoria))
@else
<a class="my-2 mx-2 align-items-center text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded text-sm w-1/2 sm:w-auto px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800" href="{{route('categorias.edit', ['categoria' => $categoria])}}"> Editar</a>
<form action="{{route('categorias.destroy', ['categoria' => $categoria] )}}" method="POST" class="my-2 mx-2 align-items-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded text-sm w-1/2 sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"">
    @method('delete')
    @csrf
    <button class="">Eliminar</button>
</form>
@endif
<a href="/produtos/create" class="my-2 mx-2 align-items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded text-sm w-1/2 sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cadastrar</a>
@endsection

@section('content')
<div class="produtos flex grid gap-y-8 place-content-start gap-x-10 sm:grid-cols-2 sm:gap-x-10 md:grid-cols-3 md:gap-x-8 lg:grid-cols-4 lg:gap-x-14 xl:grid-cols-5 xl:gap-10">
    @foreach($produtos as $produto)

    <div class="w-56 produto text-center rounded bg-gradient-to-r from-cyan-500 to-blue-500 py-2 px-2 text-white">
        <h4 class="text-2xl">{{$produto->nome}}</h4>
        <img class="rounded mt-7 h-40 w-auto mx-auto" src="{{$produto->url}}" alt="imagem do produto">

        <div>
            <p class="font-bold">Preco: {{$produto->preco}}</p>
            <p>Marca: {{$produto->marca}}</p>
            <p>Categoria: {{$produto->categorias_id->nome}}</p>
            <p class="">Descricao: {{$produto->descricao}}</p>
        </div>
        <div class="flex justify-center text-white pb-5">
            <a class="my-2 mx-5 align-items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded text-sm w-1/2 sm:w-auto px-10 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" href="{{route('produtos.show', ['produto' => $produto])}}"> Ver </a>
        </div>
    </div>
    @endforeach
</div>

@endsection

@section('css')
<style>
    .produtos{
        margin-left: 5%;
        margin-right: 5%;
    }
</style>
@endsection