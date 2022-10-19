@extends('layout.app')

@section('estilo')
<script src="https://cdn.tailwindcss.com"></script>
@endsection

@section('content')
<div class="mostra rounded-md bg-gradient-to-r from-slate-900 via-purple-900 to-slate-900 py-5">
    <table class="w-full table-fixed">
        <div class="imagem">
            <img class="img" src="{{@asset($produto->url)}}">
        </div>
        <thead>
            <tr>
                <th class="border-b dark:border-slate-600 font-bold p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Campos</th>
                <th class="border-b dark:border-slate-600 font-bold p-4 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Dados</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">Id: </td>
                <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{$produto->id}}</td>
            </tr>

            <tr>
                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">Categoria: </td>
                <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{$produto->categorias_id->nome}}</td>
            </tr>

            <tr>
                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">Nome: </td>
                <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{$produto->nome}}</td>
            </tr>

            <tr>
                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">Descricao: </td>
                <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{$produto->descricao}}</td>
            </tr>

            <tr>
                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">Desconto: </td>
                <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{$produto->desconto}} R$</td>
            </tr>

            <tr>
                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">Preço: </td>
                <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{$produto->preco}} R$</td>
            </tr>
        </tbody>
    </table>
    <div class="flex justify-center mt-5">
        <a class="bg-yellow-500 hover:bg-black hover:text-white text-white font-bold mx-1 py-2 px-4 rounded focus:outline-none focus:shadow-outline" href="{{route('produtos.edit', ['produto' => $produto])}}"> Editar</a>
        <form action="{{route('produtos.destroy', ['produto' => $produto] )}}" method="POST" class="mx-1">
            @method('delete')
            @csrf
            <button class="bg-red-500 hover:bg-black hover:text-white text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Eliminar</button>
        </form>

    </div>

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

        height: 150px;
        width: auto;
    }

    .mostra {
        width: 300px;
    }
</style>
@endsection