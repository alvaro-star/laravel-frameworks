<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Produto::count() > 0) {
            $produtos = Produto::all();
            foreach ($produtos as $produto) {
                $produto->categorias_id = Categoria::find($produto->categorias_id);
            }

            return view('produtos.index', ['produtos' => $produtos]);
        } else {
            return redirect('produtos/create');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Categoria::count() > 0) {
            return view('produtos.form', ['categorias' => Categoria::all()]);
        } else {
            return redirect('/categorias/create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produto = new Produto();
        $produto->nome = $request->nome;
        $produto->preco = $request->preco;
        $produto->marca = $request->marca;
        $produto->desconto = $request->desconto;
        $produto->categorias_id = $request->categoria;
        $produto->descricao = $request->descricao;

        $file = $request->file('file');
        $filename = strtotime('now') . $file->getClientOriginalName();

        $path =  $file->storeAs("produtos", $filename, 's3');
        $url = "https://laravel-ava.s3.sa-east-1.amazonaws.com/" . $path;
        $produto->url = $url;
        //$produto->url = $filename;
        //fotos
        /*$nomeantigo = strtotime('now') . $request->file('file')->getClientOriginalName();
        $url = $request->file('file')->storeAs('public/fotos', $nomeantigo);
        $url =  explode("public/", $url);
        $produto->url = "storage/" . $url[1];*/

        $produto->save();

        return redirect('/produtos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        $produto->categorias_id = Categoria::find($produto->categorias_id);
        return view('produtos.show', ['produto' => $produto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        return view("produtos.form", ['produto' => $produto, 'categorias' => Categoria::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        $produto->nome = $request->nome;
        $produto->preco = $request->preco;
        $produto->marca = $request->marca;
        $produto->desconto = $request->desconto;
        $produto->categorias_id = $request->categoria;
        $produto->descricao = $request->descricao;
        $produto->save();
        return redirect("/produtos");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        $url = $produto->url;
        $url = explode("storage", $url);

        if (Storage::delete("public" . $url[1])) {
            $produto->delete();
            return redirect('/produtos');
        } else {
            echo "Erro na delecao do arquivo";
        }
    }
}
