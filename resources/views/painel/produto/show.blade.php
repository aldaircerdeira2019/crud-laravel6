@extends('painel.template.template')


@section('conteudo')

<h1> Produtos: {{"$produtos->nome"}}</h1>

<p><b>Codigo do Produto: </b>{{$produtos->id}}</p>
<p><b>Nome do Produto: </b>{{$produtos->nome}}</p>	
<p><b>Valor do Produto: </b>{{$produtos->preco}}</p>
<p><b>Data de Criação: </b>{{$produtos->created_at}}</p>
<p><b>Ultima Atualização: </b>{{$produtos->updated_at}}</p>

<form class="form" method="post" action="{{route('produto.destroy',$produtos->id)}}">
	{!!method_field('delete')!!}	
	@csrf
	<button type="submit" class="alert alert-danger">{{"Apagar o Produto $produtos->nome"}}</button>
</form>
@endsection