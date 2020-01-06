@extends('painel.template.template')

@section('conteudo')
	
	<h1>Gestão das vendas</h1>
	<section id="view_corpo">
		@if(isset($errors)&&count($errors)>0)
			<div class='alert alert-danger'>
				@foreach($errors->all() as $erros)
					<p1> {{$erros}}</p1><br>
				@endforeach
			</div>
		@endif 

		@if(isset($vendas))
			<form class="form-horizontal" method="post" action="{{route('vendas.update',$vendas->id)}}">
			@method('PUT')
		@else
			<form class="form-horizontal" method="post" action="{{route('vendas.store')}}">
		@endif
		@csrf
			<div class="form-group">
				<label class="col-sm-2 control-label">Produto: </label>
    			<div class="col-sm-10">
					<input type="text" name="produto_vendido" value="{{$vendas->produto_vendido ?? old('produto_vendido')}}" placeholder="codigo do produto">
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label">Quantidade: </label>
    			<div class="col-sm-10">
					<input type="number" name="quantidade" value="{{$vendas->quantidade ?? old('quantidade')}}">
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label">Vendedor: </label>
    			<div class="col-sm-10">
					<input type="text" name="vendedor" value="{{$vendas->vendedor ?? old('vendedor')}}" placeholder="codigo do vendedor">
				</div>
			</div>
			
			<div class="form-group">
    			<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary">
						@if(!isset($vendas))
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