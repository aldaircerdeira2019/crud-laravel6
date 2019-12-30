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
<p><b>Codigo do Vendedor: </b>{{$usuarios->id}}</p>
<p><b>Nome do Vendedor: </b>{{$usuarios->nome}}</p>	
<p><b>Email: </b>{{$usuarios->email}}</p>
<p><b>Cep: </b>{{$usuarios->cep}}</p>
<p><b>rua: </b>{{$usuarios->rua}}</p>
<p><b>Data de Criação: </b>{{$usuarios->created_at}}</p>
<p><b>Ultima Atualização: </b>{{$usuarios->updated_at}}</p>

<form class="form" method="post" action="{{route('usuario.destroy',$usuarios->id)}}">
	{!!method_field('delete')!!}	
	@csrf
	<button type="submit" class="alert alert-danger">{{"Apagar o Produto $usuarios->nome"}}</button>
</form>
@endsection