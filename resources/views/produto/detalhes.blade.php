@extends('layout.principal')

@section('conteudo')
<h1>Detalhes do produto: {{ $produtos->nome }}</h1>

<form>
	<input type="hidden"
	name="_token" value="{{{ csrf_token() }}}" />

	<div class="form-group">
		<label>Nome:</label>
		<input name="nome" disabled class="form-control" value="{{ $produtos->nome }}"/>
	</div>

	<div class="form-group">
		<label>Descrição:</label>
		<input name="descricao" disabled class="form-control" value="{{ $produtos->descricao }}"/>
	</div>

	<div class="form-group">
		<label id="total">Valor:</label>
		<input name="valor" disabled class="form-control" value="{{ $produtos->valor }}"/> 
	</div>

	<div class="form-group">
		<label>Quantidade:</label>
		<input name="quantidade" type="number" disabled class="form-control" value="{{ $produtos->quantidade }}"/> 
	</div>
</form>
@stop