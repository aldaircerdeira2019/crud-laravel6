@extends('painel.template.template')


@section('conteudo')

	<h1>Lista das Vendas</h1>
	<table  class="table table-bordered">
		
		<tr class="info">
			<th width="50 px">id</th>
			<th>produto vendido</th>
			<th>quantidade</th>
			<th>vendedor</th>
			<th>Data</th>
			<th width="160 px">Ação</th>
		</tr>

		<tr>
		@foreach($r_vendas as $venda)

			<td>{{$venda->id}}</td>
			<td>{{$venda->produto_vendido}}</td>
			<td>{{$venda->quantidade}}</td>
			<td>{{$venda->vendedor}}</td>
			<td>{{$venda->created_at}}</td>

			<td class="td_del">
				<a class="btn btn-primary" href="{{route('vendas.edit',$venda->id)}}" role="button">
					<span class="glyphicon glyphicon-pencil"></span>
				</a>

				<a class="btn btn-success" href="{{route('vendas.show', $venda->id)}}" role="button">
					<span class="glyphicon glyphicon-eye-open"></span>
				</a>

				<form class="form" method="post" action="{{route('vendas.destroy',$venda->id)}}" >
					@method('delete')	
					@csrf
					<button type="submit" class="btn btn-danger" >
						<span class="glyphicon glyphicon-trash"></span>
					</button>
				</form>

			</td>

		</tr>
		@endforeach
	</table>
	{!!$r_vendas-> links()!!}
	<a href="{{route('vendas.create')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Cadastrar</a>
@endsection