@extends('painel.template.template')

@section('conteudo')
	<script type="text/javascript" src="../../js/busca_cep.js">  </script>
	
	<h1>Gestão de vendedores</h1>
	<section id="view_corpo">
		<!-- Mostrar os erros de validação dos dados-->
		@if(isset($errors)&&count($errors)>0)
			<div class='alert alert-danger'>
				@foreach($errors->all() as $erros)
					<p1> {{$erros}}</p1><br>
				@endforeach
			</div>
		@endif

		@if(isset($usuarios))
				<form class="form-horizontal" method="post" action="{{route('usuario.update',$usuarios->id)}}">
				@method('PUT')
			@else
				<form class="form-horizontal" method="post" action="{{route('usuario.store')}}">
		@endif

			@csrf
			<div class="form-group">
				<label class="col-sm-2 control-label">Nome </label>
    			<div class="col-sm-10">
					<!-- a expressão {{old('')}} serve para preservar os dados no formulario-->
					<input type="text" name="nome_u" placeholder="nome do vendedo" value="{{$usuarios->nome_u ?? old('nome_u')}}">
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label">Senha: </label>
    			<div class="col-sm-10">
					<input type="password" name="senha" placeholder="senha">
				</div>
			</div>
				
			<div class="form-group">
				<label class="col-sm-2 control-label">Email: </label>
    			<div class="col-sm-10">
					<input type="email" name="email" placeholder="e-mail"value="{{$usuarios->email ?? old('email')}}">
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label">Cep: </label>
    			<div class="col-sm-10">
					<input type="text" name="cep" id="cep" placeholder="cep" value="{{$usuarios->cep ?? old('cep')}}" maxlength="9"
						onblur="pesquisacep(this.value);">
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label">Rua: </label>
    			<div class="col-sm-10">
					<input type="text" name="rua" id='rua' placeholder="rua" value="{{$usuarios->rua ?? old('rua')}}">
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary">
						@if(!isset($usuarios))
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