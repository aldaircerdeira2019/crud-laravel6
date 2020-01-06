@extends('painel.template.template')

@section('conteudo')
	<h1>Gestão de Produtos</h1>
		@if(isset($errors)&&count($errors)>0)
			<div class='alert alert-danger'>
				@foreach($errors->all() as $erros)
				<p1> {{$erros}}</p1><br>
				@endforeach
			</div>
		@endif

		@if(isset($produtos))
		<form class="form" method="post" action="{{route('produto.update',$produtos->id)}}">
		@method('PUT')
		@else
		<form class="form" method="post" action="{{route('produto.store')}}">
		@endif

		@csrf
			
		<div class="form-group">
			<input type="text" name="nome_p" placeholder="nome do produto" value="{{$produtos->nome_p ?? old('nome_p')}}">
		</div>

		<div class="form-group">
			<input type="number" name="preco"  value="{{$produtos->preco ?? old('preco')}}" >
		</div>

		<button type="submit" class="btn btn-primary">
			@if(!isset($produtos))
				Cadastrar
				@else
				Atualizar
			@endif		
		</button>

	</form>


@endsection