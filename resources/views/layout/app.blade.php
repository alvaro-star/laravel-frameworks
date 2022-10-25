<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" src="https://cdn-icons-png.flaticon.com/512/2922/2922830.png">
    <title>Vargas Loja</title>

    @section('estilo')
    @show

    @section('css')
    @show

    @section('sidebar')
    @show

    <div class="header-2">

        <nav class="bg-white py-2 md:py-4">
            <div class="container px-4 mx-auto md:flex md:items-center">

                <div class="flex justify-between items-center">
                    <a href="/" class="font-bold text-xl text-indigo-600">FWR</a>
                    <button class="border border-solid border-gray-600 px-3 py-1 rounded text-gray-600 opacity-50 hover:opacity-75 md:hidden" id="navbar-toggle">
                        <i class="fas fa-bars"></i>
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>

                <div class="hidden md:flex flex-col md:flex-row md:ml-auto mt-3 md:mt-0" id="navbar-collapse">
                    <a href="/produtos" class="p-2 lg:px-4 md:mx-2 text-white rounded bg-indigo-600">Produtos</a>
                    <a href="/categorias" class="p-2 lg:px-4 md:mx-2 text-indigo-600 text-center border border-transparent rounded hover:bg-indigo-100 hover:text-indigo-700 transition-colors duration-300">Categorias</a>
                </div>
            </div>
        </nav>

    </div>
    <div class="flex justify-center overflow-hidden my-8 bg-slate-100">
    @section('titulos')
    @show
    </div>
    <div class="flex justify-center overflow-hidden my-8">
        @yield('content')
    </div>


    <script src="/js/meuTopo.js"></script>


    <footer class="footer-1 bg-gray-100 py-1 sm:py-12">
        <div class="container mx-auto px-4">
            <div class="sm:flex sm:flex-wrap sm:-mx-4 mt-6 pt-6 sm:mt-12 sm:pt-12 border-t">
                <div class="sm:w-full px-4 md:w-1/6">
                    <strong>FWR</strong>
                </div>
                <div class="px-4 sm:w-1/2 md:w-1/4 mt-4 md:mt-0">
                    <h6 class="font-bold mb-2">Address</h6>
                    <address class="not-italic mb-4 text-sm">
                        123 6th St.<br>
                        Melbourne, FL 32904
                    </address>
                </div>
                <div class="px-4 sm:w-1/2 md:w-1/4 mt-4 md:mt-0">
                    <h6 class="font-bold mb-2">Free Resources</h6>
                    <p class="mb-4 text-sm">Use our HTML blocks for <strong>FREE</strong>.<br>
                        <em>All are MIT License</em>
                    </p>
                </div>
                <div class="px-4 md:w-1/4 md:ml-auto mt-6 sm:mt-4 md:mt-0">
                    <a href="/produtos/create" class="px-4 py-2 bg-purple-800 hover:bg-purple-900 rounded text-white">Get Started</a>
                </div>
            </div>
        </div>
    </footer>
    </body>

</html>