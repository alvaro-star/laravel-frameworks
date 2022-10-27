<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Categoria::count() > 0) {
            return view('categorias.index', ['categorias' => Categoria::all()]);
        } else {
            return redirect('/categorias/create');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorias.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categoria = new Categoria();
        $categoria->nome = $request->nome;
        if ($categoria->save()) :
            return redirect('/categorias');
        else :
            return "Erro ao Salvar categoria";
        endif;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
        $produtos = Produto::all();
        $i = 0;
        $produtosCategoria = [];
        foreach ($produtos as $produto) {
            if ($produto->categorias_id == $categoria->id) {
                $produto->categorias_id = $categoria;
                $produtosCategoria[$i] = $produto;
                $i++;
            }
        }

        //var_dump($produtos);
        return view('produtos.index', ['produtos' => $produtosCategoria, 'categoria' => $categoria]);

        //return view('produtos.index',  ['categoria' => $categoria]);
        //return view('categorias.show', ['categoria' => $categoria]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria)
    {
        return view('categorias.form', ['categoria' => $categoria]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categoria)
    {
        $categoria->nome = $request->nome;
        $categoria->save();
        return redirect("/categorias");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
        $produtos = Produto::all();
        $i = 0;
        $isCheio = false;
        $produtosCategoria = [];
        foreach ($produtos as $produto) {
            if ($produto->categorias_id == $categoria->id) {
                $produto->categorias_id = $categoria;
                $produtosCategoria[$i] = $produto;
                $isCheio = true;
                $i++;
            }
        }

        if ($isCheio) {
            $alerta = "Existem Produtos desta Categoria";
            return view('produtos.index', ['produtos' => $produtosCategoria, 'categoria' => $categoria, 'alerta' => $alerta]);
        } else {
            $categoria->delete();
            return redirect('/categorias');
        }
    }
}
