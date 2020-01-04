@extends('painel.template.template')


@section('conteudo')

    <h1> venda de Numero: {{"$vendas->id"}}</h1>

    <p><b>numero da venda: </b>{{$vendas->id}}</p>
    <p><b>id do Produto: </b>{{$vendas->produto_vendido}}</p>	
    <p><b>Quantidade: </b>{{$vendas->quantidade}}</p>
    <p><b>id do Vendedor: </b>{{$vendas->vendedor}}
    <p><b>Data de Criação: </b>{{$vendas->created_at}}</p>
    <p><b>Ultima Atualização: </b>{{$vendas->updated_at}}</p>



 <a class="btn btn-primary" href="{{route('vendas.index')}}">
    <span class="glyphicon glyphicon-chevron-left"></span>
 </a>

@endsection