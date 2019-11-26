@extends('painel.template.template')


@section('conteudo')

<h1>Lista de Produtos</h1>

<table  class="table table-striped">
	
	<tr>
		<th>id_produto</th>
		<th>Nome</th>
		<th>preço</th>
		<th>Data Criação</th>
		<th>Data Modificação</th>
		<th>Modifica</th>


	</tr>
	<tr>

		@foreach($produtos as $produto)

		<td>{{$produto->id_produto}}</td>
		<td>{{$produto->nome}}</td>
		<td>{{$produto->preco}}</td>
		<td>{{$produto->data_cri_pro}}</td>
		<td>{{$produto->data_update}}</td>
		<td>
			<a class="btn btn-primary" href="" role="button">editar</a>
			<a class="btn btn-primary" href="#" role="button">deletar</a>
		</td>

	</tr>

	@endforeach
</table>
<a href="{{route('produto.create')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Cadastrar</a>
@endsection