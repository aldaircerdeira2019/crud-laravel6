@extends('painel.template.template')

@section('conteudo')
<h1>Gestão de vendedores</h1>
<form class="form" method="get" action="{{ $action ?? url('adiciona_u') }}">

	<div class="form-group">
	<input type="text" name="nome" placeholder="nome do vendedo"></div>
	<div class="form-group">
	<input type="password" name="senha" placeholder="senha"></div>
	<div class="form-group">
	<input type="email" name="email" placeholder="e-mail"></div>
	<div class="form-group">
	<input type="text" name="rua" placeholder="rua"></div>
	<div class="form-group">
	<input type="text" name="cep" placeholder="cep"></div>
	<div class="form-group">
</div>
	<button type="submit" class="btn btn-primary">Cadastrar</button>
</form>


@endsection