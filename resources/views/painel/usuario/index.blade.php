@extends('painel.template.template')


@section('conteudo')

	<h1>Lista de Vendedores</h1>

	<table  class="table table-bordered">
		
		<tr  class="info">
			<th width="50 px">id</th>
			<th>Vendedor</th>
			<th>email</th>
			<th>rua</th>
			<th>Cep</th>
			<th>Data Criação</th>
			<th>Data de atualização</th>
			<th width="102 px">Ação</th>


		</tr>

		<tr>
		@foreach($usuarios as $usuario)

			<td>{{$usuario->id}}</td>
			<td>{{$usuario->nome_u}}</td>
			<td>{{$usuario->email}}</td>
			<td>{{$usuario->rua}}</td>
			<td>{{$usuario->cep}}</td>
			<td>{{$usuario->created_at}}</td>
			<td>{{$usuario->updated_at}}</td>

			<td>
				<a class="btn btn-primary" href="{{route('usuario.edit',$usuario->id)}}">
					<span class="glyphicon glyphicon-pencil"></span>
				</a>
				<a class="btn btn-success" href="{{route('usuario.show',$usuario->id)}}" role="button">
					<span class="glyphicon glyphicon-eye-open"></span> 
				</a>
			</td>

		</tr>
		@endforeach
	</table>

	{!!$usuarios-> links()!!}
	<a href="{{route('usuario.create')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Cadastrar</a>

@endsection