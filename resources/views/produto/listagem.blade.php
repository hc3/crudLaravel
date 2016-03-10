@extends('layout.principal')

@section('conteudo')
	
		@if(empty($produtos))
		<div class="alert alert-danger">
			Você não tem produtos cadastrados
		</div>
		@else
		<h1>Listagem de Produtos</h1>
		<table class="table table-hover">
			<th>Id</th>
			<th>Nome</th>
			<th>Valor</th>
			<th>Descrição</th>
			<th>Quantidade</th>
			 	@foreach ($produtos as $p)
			<tr class="{{$p->quantidade<=1 ? 'danger' : '' }}">
				<td> {{ $p->id }} </td>
				<td> {{ $p->nome }}  </td>
				<td> {{ $p->valor }} </td>
				<td> {{ $p->descricao }} </td>
				<td> {{ $p->quantidade }} </td>
				<td>
					<a href="/produtos/show/<?= $p->id ?>">
						<span>visualizar</span>
					</a>
				</td>
				<td>
					<a href="/produtos/remove/<?= $p->id ?>">
						<span>remover</span>
					</a>
				</td>
				<td>
					<a href="/produtos/update/<?= $p->id ?>">
						<span>atualizar</span>
					</a>
				</td>
			</tr>
				@endforeach
		</table>

		@endif
		@if(old('nome'))
		<div class="alert alert-success">
			<strong>Sucesso!</strong> O Produto {{ old('nome') }} foi adicionado com sucesso
		</div>
		@endif
		@stop
	