@extends('painel.template.template')


@section('conteudo')

	<h1> Vendedor : {{"$usuarios->nome"}}</h1>
	<!-- Mostrar os erros de validação dos dados-->
	@if(isset($errors)&&count($errors)>0)
		<div class='alert alert-danger'>
			@foreach($errors->all() as $erros)
				<p1> {{$erros}}</p1><br>
			@endforeach
		</div>
	@endif

	<table class="table table-bordered">
		<tr><th>Codigo do Vendedor:</th>	<td>{{$usuarios->id}}</td></tr>
		<tr><th>Nome do Vendedor:</th>		<td>{{$usuarios->nome_u}}</td></tr>
		<tr><th>Email:</th>					<td>{{$usuarios->email}}</td></tr>
		<tr><th>Cep:</th>					<td>{{$usuarios->cep}}</td></tr>
		<tr><th>rua:</th>					<td>{{$usuarios->rua}}</td></tr>
		<tr><th>Data de Criação:</th>		<td>{{$usuarios->created_at}}</td></tr>
		<tr><th>Ultima Atualização:</th>	<td>{{$usuarios->updated_at}}</td></tr>
	</table>

	<!-- parte comentada caso queira usar a função para deletar-->
	<!--form class="form" method="post" action="{{route('usuario.destroy',$usuarios->id)}}">
		{!!method_field('delete')!!}	
		@csrf>
		<button type="submit" class="alert alert-danger">{{"Apagar o Produto $usuarios->nome"}}</button>
	</form-->
	<a class="btn btn-primary" href="{{route('usuario.index')}}">
		<span class="glyphicon glyphicon-chevron-left"></span>
	</a>

@endsection