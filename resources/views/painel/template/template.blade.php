<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{url('css/stilo_produto.css')}}" >   

       <title>{{$title ?? 'Sistema de vendas'}}</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
   
    </head>
    <body>
            <div class="content">
                <header id="cabecalho" >
                    <div class="title">
                    SISTEMA DE VENDAS
                    </div>
                    <nav id="menu">
                        <ul type="disc">
                            <div class="links">
                                <li><a href="{{route('usuario.index')}}">LISTA DE VENDEDORES</a></li>
                                <li><a href="{{route('produto.index')}}">LISTA DE PRODUTOS</a></li>
                                <li><a href="{{route('vendas.index')}}">LISTA DE VENDAS</a></li>
                            </div>
                        </ul>
                    </nav>
                </header>
                <br><br>
                
                <section id="corpo">
                    @include('flash::message')
					@yield('conteudo')
                </section>
            </div>
            	
    
    </body>
</html>