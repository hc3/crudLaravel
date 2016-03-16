@extends('layout.principal')
@section('conteudo')
<h1>Novo Serviço</h1>

<form action="/servicos/adiciona" method="post">
	<input type="hidden"
	name="_token" value="{{{ csrf_token() }}}" />

	<div class="form-group">
		<label>Descrição:</label>
		<input name="descricao" class="form-control"/>
	</div>

	<div class="form-group">
		<label>Valor:</label>
		<input name="valor" class="form-control"/>
	</div>

		<button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
</form>

@stop