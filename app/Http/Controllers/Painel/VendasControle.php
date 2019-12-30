<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\VendasModel;
use App\Http\Requests\VendasFormRequest;



class VendasControle extends Controller
{
    private $vendas;
    private $pagi=5;
    public function __construct(VendasModel $vendas)
    {
        $this->vendas = $vendas;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title ='Listagem dos Vendedores';
       $r_vendas= $this->vendas-> paginate($this->pagi);
        return view('painel.vendas.index',compact('r_vendas','title'));
    }    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='Cadastrar Novo Vendedor';
        return view('painel.vendas.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VendasFormRequest $request)
    {

       //dd ($request->all()); //capturar todos os dados
       // dd($request->only(['nome','preco'])); capturar selecionando
       // dd($request->except(['nome'])); exeto o campo tal

        $dadosform = $request->all();//armazena os dados que vem do formulario


        $insert =$this->vendas->create($dadosform);
        if($insert)
            return redirect()->route('vendas.index');
        else
            return redirect()->route('vendas.create');
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
        $vendas=$this->vendas->find($id);
        $title = "editando a venda : {$vendas->id}";
        return view('painel.vendas.create', compact('title','vendas'));
       // return"editando a venda: $id";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VendasFormRequest $request, $id)
    {
        $dadosform = $request->all();
        $vendas= $this->vendas->find($id);
        $update=$vendas->update($dadosform);
        if ($update) {
            return redirect()->route('vendas.index');
        } else {
            return redirect()->route('vendas.edit',$id)->with(['errors'=>'erro ao atualizar']);
        }

       // return"editando item : $id";
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

    
}

