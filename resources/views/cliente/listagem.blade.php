@extends('layout.principal')

@section('conteudo')

	@if(empty($clientes))
	<div class="alert alert-danger">
		Você não tem clientes cadastrados
	</div>
	@else
	<h1>Listagem de Clientes</h1>
		<table class="table table-hover">
			<th>Id</th>
			<th>Nome</th>
			<th>Idade</th>
			<th>Cpf</th>
			<th>Telefone</th>
			<th>Email</th>
		 	@foreach ($clientes as $cli)
		 	<tr>
			<td> {{ $cli->id }} </td>
			<td> {{ $cli->nome }}  </td>
			<td> {{ $cli->idade }} </td>
			<td> {{ $cli->cpf }} </td>
			<td> {{ $cli->telefone }} </td>
			<td> {{ $cli->email }} </td>
			<td>
				<a href="/clientes/show/<?= $cli->id ?>">
					<span>visualizar</span>
				</a>
			</td>
			<td>
				<a href="/clientes/remove/<?= $cli->id ?>">
					<span>remover</span>
				</a>
			</td>
			<td>
				<a href="/clientes/update/<?= $cli->id ?>">
					<span>atualizar</span>
				</a>
			</td>
			</tr>
				@endforeach
		</table>

		@endif
		@if(old('nome'))
		<div class="alert alert-success">
			<strong>Sucesso!</strong> O Cliente foi adicionado com sucesso
		</div>
		@endif

@stop