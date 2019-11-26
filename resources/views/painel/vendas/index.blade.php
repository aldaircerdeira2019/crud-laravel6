@extends('painel.template.template')


@section('conteudo')

<h1>Lista das Vendas</h1>

<table  class="table table-striped">
	
	<tr>
		<th>id_venda</th>
		<th>produto vendido</th>
		<th>quandtidade</th>
		<th>vendedor</th>
		<th>Data</th>
	</tr>
	<tr>

		@foreach($r_vendas as $venda)

		<td>{{$venda->id_vendas}}</td>
		<td>{{$venda->produto_vendido}}</td>
		<td>{{$venda->quantidade}}</td>
		<td>{{$venda->vendedor}}</td>
		<td>{{$venda->data_venda}}</td>

		<td>
			<a class="btn btn-primary" href="" role="button">editar</a>
			<a class="btn btn-primary" href="#" role="button">deletar</a>
		</td>

	</tr>

	@endforeach
</table>
<a href="{{route('vendas.create')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Cadastrar</a>
@endsection