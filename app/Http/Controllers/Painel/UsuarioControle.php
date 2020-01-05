<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\UsuarioModel;
use App\Http\Requests\UsuarioFormRequest;


class UsuarioControle extends Controller
{
    private $usuario;
    private $pagi = 5;
    public function __construct(UsuarioModel $usuario)/*metodo construtor que servera p todos os metodos*/
    {
        $this->usuario = $usuario;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title ='Listagem dos Vendedores';
       $usuarios= $this->usuario-> paginate($this->pagi);
        return view('painel.usuario.index',compact('usuarios','title'));
    }    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='Cadastrar Novo Vendedor';
        return view('painel.usuario.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuarioFormRequest $request)
    {

       //dd ($request->all()); //capturar todos os dados
       // dd($request->only(['nome','preco'])); capturar selecionando
       // dd($request->except(['nome'])); exeto o campo tal

       // $dadosform = $request->all();//armazena os dados que vem do formulario

        /* VALIDAÇÃO DOS DADOS */
       // $this->validate($request, $this->usuario->regras);
       /* $mensagens = [
            'nome.required'     =>'O campo nome é de preechimento obrigatorio',
            'nome.min'          =>'O nome tem que ter no mínimo 3 caracteres',
            'nome.max'          =>'O nome ultrapassa o limite de 60 caracteres',
            'senha.required'    =>'O campo senha é de preechimento obrigario',
            'senha.min'         =>'A senha deve ter no mínimo 8 caracteres',
            'email.required'    =>'O campo email é de preechimento obrigatorio',
            'email.max'         =>'O email ultrapassa o limite de 255 caracteres ',
            'cep.required'      =>'O campo cep é de preechimento obrigatorio',
            'rua.required'      =>'O campo rua é de preechimento obrigatorio',
            'rua.max'           =>'O nome da rua ultrapassa o limite de 120 caracteres'
        ] ;
        $validate = validator($dadosform,$this->usuario->regras, $mensagens); 
        if($validate->fails()){
            return redirect()
            ->route('usuario.create')
            ->withErrors($validate)
           ->withInput();/* para permanece os dados no formulario*
        }*/

       
        try {
            $dadosform = $request->all();
            $insert =$this->usuario->create($dadosform);
            flash('cadastrado com sucessor!')->success();
            return redirect()->route('usuario.index');            
        } catch (\Exception $e) {
            if(env('APP_DEBUG')){
                flash($e->getMessage())->warning();
                return redirect()->route('usuario.create');
            }
            flash('erro ao cadastrar! verifique os dados')->warning();
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
        $usuarios= $this->usuario->find($id);
        $title="Vendedor: {$usuarios->nome}";
        return view('painel.usuario.show',compact('usuarios','title'));

       // return"visualizar para o id : $id";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuarios= $this->usuario->find($id);

        $title="Editar Produto : {$usuarios->nome}";
        return view('painel.usuario.create',compact('title','usuarios'));
        //return"retorno id : $id";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsuarioFormRequest $request, $id)
    {
        try {
            $dadosform = $request->all();
            $usuario= $this->usuario->find($id);
            $update=$usuario->update($dadosform);
            flash('atualizado com sucesso!')->success();
            return redirect()->route('usuario.index');
        } catch (\Exception $e) {
            if(env('APP_DEBUG')){
                flash($e->getMessage())->warning();
                return redirect()->route('usuario.create');
            }
            flash('erro ao atualizar')->warning();
            return redirect()->route('usuario.create');
        }

        

        //return"updade do id: $id";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario= $this->usuario->find($id);
        $delete=$usuario->delete();
       
    }

     public function test()
    {
        $insert =  $this->usuario->create([
                        'nome' => 'maria de aparecidaxc',
                        'senha'=> '12548',
                        'email'=> 'hmaa@hotmail.com',
                        'cep'  => '69086-210',
                        'rua'  => 'rua joão batista'
                  ]);
                if($insert)
                    return'cadastrado';
                else
                    return'não cadastrado';
    }
}

