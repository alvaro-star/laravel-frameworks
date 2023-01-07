@extends('layout.app')

@section('titulos')
    <h1 class="px-5 py-3">Minhas Categorias</h1>
    <a href="/categorias/create"
        class="my-2 mx-5 align-items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded text-sm w-1/2 sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cadastrar</a>
@endsection

@section('content')
    <div class="rounded-md tabela bg-gradient-to-r from-blue-500 to-purple-500 py-5">
        <table class="w-full table-fixed ">
            <thead>
                <tr>
                    <th
                        class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-white dark:text-slate-200 text-left">
                        Nome</th>
                    <th
                        class="border-b dark:border-slate-600 font-medium p-4 pr-8 pt-0 pb-3 text-white dark:text-slate-200 text-left">
                        Acao</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $categoria)
                    <tr>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-white dark:text-slate-400">
                            {{ $categoria->nome }}</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-white dark:text-slate-400">
                            <a class="align-items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                href="{{ route('categorias.show', ['categoria' => $categoria]) }}">Ver Categoria</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="flex justify-center mt-5">
            <a href="/categorias/create"
                class="align-items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cadastrar</a>
        </div>
    </div>
@endsection

@section('css')
    <style>
        .tabela {
            width: 400px;
        }
    </style>
@endsection
