@extends('layout.principal')

@section('conteudo')
<h1>Alterando cliente</h1>

<form action="/clientes/atualizar/<?= $cliente->id ?>" method="post">

	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

	<div class="form-group">
		<label>Nome:</label>
		<input name="nome" value="{{ $cliente->nome }}" class="form-control"/>
	</div>

	<div class="form-group">
		<label>Idade:</label>
		<input name="idade" value="{{ $cliente->idade }}" class="form-control"/>
	</div>

	<div class="form-group">
		<label>Cpf:</label>
		<input name="cpf" value="{{ $cliente->cpf }}" class="form-control"/>
	</div>

	<div class="form-group">
		<label>Email:</label>
		<input name="email" value="{{ $cliente->email }}" class="form-control"/>
	</div>

	<div class="form-group">
		<label>Telefone:</label>
		<input name="telefone" value="{{ $cliente->telefone }}" class="form-control"/>
	</div>

	<div class="form-group">
		<label>Rua:</label>
		<input name="rua" value="{{ $cliente->endereco->rua }}" class="form-control"/>
	</div>

	<div class="form-group">
		<label>Bairro:</label>
		<input name="bairro" value="{{ $cliente->endereco->bairro }}" class="form-control"/>
	</div>

	<div class="form-group">
		<label>Cep:</label>
		<input name="cep"  value="{{ $cliente->endereco->cep }}" class="form-control"/>
	</div>

	<div class="form-group">
		<label>Cidade:</label>
		<input name="cidade"  value="{{ $cliente->endereco->cidade }}" class="form-control"/>
	</div>

	<div class="form-group">
		<label>Estado:</label>
		<input name="uf" value="{{ $cliente->endereco->uf }}" class="form-control"/>
	</div>

	<button type="submit" class="btn btn-primary btn-block">Update</button>
</form>
@stop