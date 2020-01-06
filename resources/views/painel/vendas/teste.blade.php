@extends('painel.template.template')


@section('conteudo')

	
	<table  class="table table-bordered">
		
		<tr class="info">
			<th width="50 px">id</th>
			<th>Vendedor</th>
			<th>Produto</th>
			<th>Quantidade</th>
			<th>Preço</th>
			<th>Data</th>
		</tr>

		<tr>
		@foreach($consultas as $venda)

			<td>{{$venda->id}}</td>
			<td>{{$venda->nome_u}}</td>
			<td>{{$venda->nome_p}}</td>
			<td>{{$venda->quantidade}}</td>
			<td>{{$venda->preco}}</td>
			<td>{{$venda->created_at}}</td>
		</tr>
		@endforeach
	</table>
	{!!$consultas-> links()!!}
@endsection