@extends('painel.template.template')


@section('conteudo')
	<section id="view_corpo">
		<h1> Produtos: {{"$produtos->nome"}}</h1>

		<table class="table table-bordered">
			<tr><th>Codigo do Produto:</th>		<td>{{$produtos->id}}</td></tr>
			<tr><th>Nome do Produto:</th>		<td>{{$produtos->nome_p}}</td></tr>
			<tr><th>Valor do Produto:</th>		<td>{{$produtos->preco}}</td></tr>
			<tr><th>Data de Criação:</th>		<td>{{$produtos->created_at}}</td></tr>
			<tr><th>Ultima Atualização:</th>	<td>{{$produtos->updated_at}}</td></tr>
		</table>
		<!-- parte comentada caso queira usar a função para deletar-->
		<!--form class="form" method="post" action="{{route('produto.destroy',$produtos->id)}}">
			{!!method_field('delete')!!}	
			@csrf
			<button type="submit" class="alert alert-danger">{{"Apagar o Produto $produtos->nome"}}</button>
		</form-->

		<a class="btn btn-primary" href="{{route('produto.index')}}">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
	</section>
@endsection