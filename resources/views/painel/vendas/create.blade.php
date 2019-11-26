@extends('painel.template.template')

@section('conteudo')
<h1>Gestão das vendas</h1>
<form class="form" method="get" action="{{ $action ?? url('adiciona_v') }}">

	<div class="form-group">
	<input type="text" name="produto_vendido" placeholder="codigo do produto"></div>
	<div class="form-group">
	<input type="number" name="quantidade" ></div>
	<div class="form-group">
	<input type="text" name="vendedor" placeholder="codigo do vendedor"></div>
	<div class="form-group">
	<button type="submit" class="btn btn-primary">Cadastrar</button></div>
</form>


@endsection