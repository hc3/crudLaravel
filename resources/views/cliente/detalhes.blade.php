@extends('layout.principal')

@section('conteudo')

<h1>Detalhes do cliente: {{ $cliente->nome }}</h1>

<form >

	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

	<div class="form-group">
		<label>Nome:</label>
		<input name="nome" disabled value="{{ $cliente->nome }}" class="form-control"/>
	</div>

	<div class="form-group">
		<label>Idade:</label>
		<input name="idade" disabled value="{{ $cliente->idade }}" class="form-control"/>
	</div>

	<div class="form-group">
		<label>Cpf:</label>
		<input name="cpf" disabled value="{{ $cliente->cpf }}" class="form-control"/>
	</div>

	<div class="form-group">
		<label>Email:</label>
		<input name="email" disabled value="{{ $cliente->email }}" class="form-control"/>
	</div>

	<div class="form-group">
		<label>Telefone:</label>
		<input name="telefone" disabled value="{{ $cliente->telefone }}" class="form-control"/>
	</div>

	<div class="form-group">
		<label>Rua:</label>
		<input name="rua" disabled value="{{ $cliente->endereco->rua }}" class="form-control"/>
	</div>

	<div class="form-group">
		<label>Bairro:</label>
		<input name="bairro" disabled value="{{ $cliente->endereco->bairro }}" class="form-control"/>
	</div>

	<div class="form-group">
		<label>Cep:</label>
		<input name="cep"  disabled value="{{ $cliente->endereco->cep }}" class="form-control"/>
	</div>

	<div class="form-group">
		<label>Cidade:</label>
		<input name="cidade"  disabled value="{{ $cliente->endereco->cidade }}" class="form-control"/>
	</div>

	<div class="form-group">
		<label>Estado:</label>
		<input name="uf" disabled value="{{ $cliente->endereco->uf }}" class="form-control"/>
	</div>

</form>
@stop
