@extends('painel.template.template')


@section('conteudo')
   <section id="view_corpo">

      <h1> venda de Numero: {{"$vendas->id"}}</h1>
      <table class="table table-bordered">
         <tr><th>numero da venda: </th>      <td>{{$vendas->id}}</td></tr>
         <tr><th>id do Vendedor: </th>       <td>{{$vendas->vendedor}}</td></tr>
         <tr><th>Vendedor: </th>             <td>{{$vendas->nome_u}}</td></tr>
         <tr><th>id do Produto: </th>        <td>{{$vendas->produto_vendido}}</td></tr>
         <tr><th>produto: </th>              <td>{{$vendas->nome_p}}</td></tr>
         <tr><th>Quantidade: </th>           <td>{{$vendas->quantidade}}</td></tr>
         <tr><th>Preço: </th>                <td>{{$vendas->preco}}</td></tr>
         <tr><th>Data de Criação: </th>      <td>{{$vendas->created_at}}</td></tr>
         <tr><th>Ultima Atualização: </th>   <td>{{$vendas->updated_at}}</td></tr>
      </table>

      <a class="btn btn-primary" href="{{route('vendas.index')}}">
         <span class="glyphicon glyphicon-chevron-left"></span>
      </a>

   </section>

@endsection