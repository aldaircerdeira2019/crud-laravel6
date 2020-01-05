<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ProdutoModel;
use App\Http\Requests\ProdutoFormRequest;

class ProdutoControle extends Controller
{
    private $produto;
    private $pagi = 5;
    public function __construct(ProdutoModel $produto)
    {
        $this->produto = $produto;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title ='Listagem dos Produtos';
       $produtos= $this->produto-> paginate($this->pagi);
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
    public function store(ProdutoFormRequest $request)
    {

       //dd ($request->all()); //capturar todos os dados
       // dd($request->only(['nome','preco'])); capturar selecionando
       // dd($request->except(['nome'])); exeto o campo tal
        try {
            $dadosform = $request->all();//armazena os dados que vem do formulario
            $insert =$this->produto->create($dadosform);
            flash('cadastrado com sucesso!')->success();
            return redirect()->route('produto.index');
        } catch (\Exception $e) {
            if(env('APP_DEBUG')){
                flash($e->getMessage())->warning();
                return redirect()->route('produto.create');
            }
            flash('erro ao cadastrar! verifique os dados')->warning();
            return redirect()->route('produto.create');
        }
       
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $produtos= $this->produto->find($id);
         $title="produto: {$produtos->nome}";
         return view('painel.produto.show',compact('produtos','title'));
        //return"vizualizar : {$id}";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {       /* metodo que recupera um item pelo o id*/
            $produtos= $this->produto->find($id);

            $title="Editar Produto : {$produtos->nome}";
            return view('painel.produto.create',compact('title','produtos'));
          
        //return "editasr table {$id_produto}";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProdutoFormRequest $request, $id)
    {   try {
        $dadosform = $request->all();
        $produto= $this->produto->find($id);
        $update=$produto->update($dadosform); 
        flash('atualizado com sucesso!')->success();
        return redirect()->route('produto.index');
    } catch (\Exception $e) {
        if(env('APP_DEBUG')){
            flash($e->getMessage())->warning();
            return redirect()->route('produto.edit');
        }
        flash('erro ao atualizar')->warning();
        return redirect()->route('produto.edit');
    }
        
        //return"editando o {$id}";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto= $this->produto->find($id);
        $delete=$produto->delete();     
       // return'ok';
    }

}
