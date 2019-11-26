<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ProdutoModel;

class ProdutoControle extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProdutoModel $produto)
    {
        $title ='Listagem dos Produtos';
       $produtos= $produto-> all();
        return view('painel.produto.index',compact('produtos','title'));
    }    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='Cadastrar Novo Produto';
        return view('painel.produto.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,ProdutoModel $produto)
    {

       //dd ($request->all()); //capturar todos os dados
       // dd($request->only(['nome','preco'])); capturar selecionando
       // dd($request->except(['nome'])); exeto o campo tal

        $dadosform = $request->all();//armazena os dados que vem do formulario


        $insert =$produto->insert($dadosform);
        if($insert)
            return redirect()->route('produto.index');
        else
            return redirect()->route('produto.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

     public function test(ProdutoModel $produto)
    {
               $produtos= $produto-> all();
        return'test';
    }
}
