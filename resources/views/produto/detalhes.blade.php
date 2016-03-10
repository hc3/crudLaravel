@extends('layout.principal')

@section('conteudo')
			<h1>Detalhes do produto: {{ $p->nome }}</h1>

			<ul>
				<li>
					<b>Nome: </b> R$ {{ $p->nome }}
				</li>

				<li>
					<b>Valor: </b> R$  {{ $p->valor }}
				</li>

				<li>
					<b>Descrição: </b> R$  {{ $p->descricao }}
				</li>

				<li>
					<b>Quantidade: </b> R$ {{ $p->quantidade }}
				</li>
			</ul>
@stop
