@extends('layout.app')

@section('estilo')
<script src="https://cdn.tailwindcss.com"></script>
@endsection

@section('content')


<form action="{{(!isset($produto)) ? '/produtos' : route('produtos.update', ['produto' => $produto])}}" method="POST" enctype="multipart/form-data" class="rounded-md text-white mt-1 px-5 py-3 formulario bg-gradient-to-r from-slate-900 via-purple-900 to-slate-900">
    @if(!isset($produto))

    @else
    @method('PUT')
    @endif
    @csrf
    <h3>Insira os dados da produto</h3>

    <div class="mt-7 relative z-0 mb-6 w-full group">
        <input value="{{(!isset($produto) ? '': $produto->nome)}}" name="nome" id="floating_nome" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
        <label for="floating_nome" class="peer-focus:font-medium absolute text-sm text-white dark:text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nome</label>
    </div>
    <div class="mt-7 relative z-0 mb-6 w-full group">
        <input value="{{(!isset($produto) ? '': $produto->preco)}}" name="preco" id="floating_preco" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
        <label for="floating_preco" class="peer-focus:font-medium absolute text-sm text-white dark:text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">preco</label>
    </div>
    <div class="mt-7 relative z-0 mb-6 w-full group">
        <input value="{{(!isset($produto) ? '': $produto->marca)}}" name="marca" id="floating_marca" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
        <label for="floating_marca" class="peer-focus:font-medium absolute text-sm text-white dark:text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">marca</label>
    </div>

    <div class="mt-7 relative z-0 mb-6 w-full group">
        <input value="{{(!isset($produto) ? '': $produto->desconto)}}" name="desconto" id="floating_desconto" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
        <label for="floating_desconto" class="peer-focus:font-medium absolute text-sm text-white dark:text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">desconto</label>
    </div>

    <div class="mt-7 relative z-0 mb-6 w-full group">
        <input value="{{(!isset($produto) ? '': $produto->descricao)}}" name="descricao" id="floating_descricao" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
        <label for="floating_descricao" class="peer-focus:font-medium absolute text-sm text-white dark:text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">descricao</label>
    </div>

    <div class="mt-7 relative z-0 mb-6 w-full group">
        <select name="categoria" id="floating_categoria" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
            @foreach($categorias as $categoria)
            <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
            @endforeach
        </select>
        <label for="floating_categoria" class="peer-focus:font-medium absolute text-sm text-white dark:text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">categoria</label>
    </div>
    @if(empty($produto))
    <div class="mt-7 relative z-0 mb-6 w-full group">
        <input type="file" value="{{(!isset($produto) ? '': $produto->file)}}" name="file" id="floating_file" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
        <label for="floating_file" class="peer-focus:font-medium absolute text-sm text-white dark:text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">file</label>
    </div>
    @endif



    <div class="flex justify-center">
        <button class="align-items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enviar</button>
    </div>

</form>


@endsection

@section('css')
<style>
    .formulario {
        width: 300px;
    }
</style>
@endsection