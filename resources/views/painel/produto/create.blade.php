@extends('painel.template.template')

@section('conteudo')
<h1>Gestão de Produtos</h1>
<form class="form" method="get" action="{{ $action ?? url('adiciona_p') }}">
	<div class="form-group">
	<input type="text" name="nome" placeholder="nome do produto"></div>
	<div class="form-group">
	<input type="number" name="preco"></div>
	<div class="form-group">
	<input type="hidden" name="data_update" ></div>
</div>
	<button type="submit" class="btn btn-primary">Cadastrar</button>
</form>


@endsection