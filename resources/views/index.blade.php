@extends('layout.app')

@section('estilo')
<script src="https://cdn.tailwindcss.com"></script>
@endsection

@section('content')
<div class="bg-indigo-100 py-6 md:py-12">
    <div class="container px-4 mx-auto">

        <div class="text-center max-w-2xl mx-auto">
            <h1 class="text-3xl md:text-4xl font-medium mb-2">Get the header you needed for your awesome website.</h1>
            <a href="/produtos/create" class="bg-indigo-600 text-white py-2 px-6 rounded-full text-xl mt-7">Começar</a>
            <div class="mt-4">
                <img src="https://logosmarcas.net/wp-content/uploads/2020/11/Playboy-Logo.png" alt="mockup" class="d-block max-w-full rounded shadow-md">
            </div>
        </div>
    </div>
</div>
@endsection