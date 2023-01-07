@extends('layout.app')

@section('content')
    <div class="rounded-md w-1/2 bg-gradient-to-r from-slate-900 via-purple-900 to-slate-900 py-5">
        <table class="w-full table-auto ">
            <thead>
                <tr>
                    <th
                        class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
                        Id</th>
                    <th
                        class="border-b dark:border-slate-600 font-medium p-4 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
                        Nome</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                        Id: </td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                        {{ $categoria->id }}</td>
                </tr>


                <tr>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                        Nome: </td>
                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                        {{ $categoria->nome }}</td>
                </tr>
            </tbody>
        </table>
        <div class="flex justify-center mt-5">
            <a class="bg-yellow-500 hover:bg-black hover:text-white text-white font-bold mx-1 py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                href="{{ route('categorias.edit', ['categoria' => $categoria]) }}"> Editar</a>
            <form action="{{ route('categorias.destroy', ['categoria' => $categoria]) }}" method="POST" class="mx-1">
                @method('delete')
                @csrf
                <button
                    class="bg-red-500 hover:bg-black hover:text-white text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Eliminar</button>
            </form>

        </div>

    </div>
@endsection
