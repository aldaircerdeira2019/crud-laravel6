@extends('painel.template.template')


@section('conteudo')

<h1>Lista de Produtos</h1>

<table  class="table table-bordered">
	
	<tr class="info">
		<th>id produto</th>
		<th>Nome</th>
		<th>Preço</th>
		<th>Data Criação</th>
		<th>Data Modificação</th>
		<th>Ação</th>


	</tr>
	<tr>

		@foreach($produtos as $produto)

		<td>{{$produto->id}}</td>
		<td>{{$produto->nome}}</td>
		<td>{{$produto->preco}}</td>
		<td>{{$produto->created_at}}</td>
		<td>{{$produto->updated_at}}</td>
		<td>
			<a class="btn btn-primary" href="{{route('produto.edit',$produto->id)}}" role="button">
			<span class="glyphicon glyphicon-pencil"></span>
			</a>

			<a class="btn btn-success" href="{{route('produto.show',$produto->id)}}" role="button">
			<span class="glyphicon glyphicon-eye-open"></span>
			</a>

			<a class="btn btn-danger" href="{{route('produto.show',$produto->id)}}" role="button">
			<span class="glyphicon glyphicon-trash"></span>
			</a>
		</td>

	</tr>

	@endforeach
</table>
{!!$produtos-> links()!!}
<a href="{{route('produto.create')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Cadastrar</a>
@endsection