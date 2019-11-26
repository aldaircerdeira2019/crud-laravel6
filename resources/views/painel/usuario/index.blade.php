@extends('painel.template.template')


@section('conteudo')

<h1>Lista de Vendedores</h1>

<table  class="table table-striped">
	
	<tr>
		<th>id_vendedor</th>
		<th>Vendedor</th>
		<th>senha</th>
		<th>email</th>
		<th>Cep</th>
		<th>rua</th>
		<th>Data</th>
		


	</tr>
	<tr>

		@foreach($usuarios as $usuario)

		<td>{{$usuario->id_usuario}}</td>
		<td>{{$usuario->nome}}</td>
		<td>{{$usuario->senha}}</td>
		<td>{{$usuario->email}}</td>
		<td>{{$usuario->cep}}</td>
		<td>{{$usuario->rua}}</td>
		<td>{{$usuario->data_criacao}}</td>

		<td>
			<a class="btn btn-primary" href="" role="button">editar</a>
			<a class="btn btn-primary" href="#" role="button">deletar</a>
		</td>

	</tr>

	@endforeach
</table>
<a href="{{route('usuario.create')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Cadastrar</a>
@endsection