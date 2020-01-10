@extends('painel.template.template')

@section('conteudo')
	
	<h1>Gestão de Produtos</h1>
	<section id="view_corpo">
		@if(isset($errors)&&count($errors)>0)
			<div class='alert alert-danger'>
				@foreach($errors->all() as $erros)
				<p1> {{$erros}}</p1><br>
				@endforeach
			</div>
		@endif

		@if(isset($produtos))
			<form class="form-horizontal" method="post" action="{{route('produto.update',$produtos->id)}}">
			@method('PUT')
		@else
			<form class="form-horizontal" method="post" action="{{route('produto.store')}}">
		@endif

			@csrf
				
			<div class="form-group">
				<label class="col-sm-2 control-label">Produto: </label>
    			<div class="col-sm-10">
					<input type="text" name="nome_p" placeholder="nome do produto" value="{{$produtos->nome_p ?? old('nome_p')}}">
				</div>
  			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label">Preço: </label>
    			<div class="col-sm-10">
					<input type="text" name="preco"  value="{{$produtos->preco ?? old('preco')}}" >
				</div>
			</div>
			<div class="form-group">
    			<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary">
						@if(!isset($produtos))
							Cadastrar
						@else
							Atualizar
						@endif		
					</button>
				</div>
 			 </div>

		</form>
	</section>

@endsection