@extends('layout.principal')

@section('conteudo')
			<h1>Detalhes do Peça: {{ $pecas->descricao }}</h1>

			<form >
				<input type="hidden"
				name="_token" value="{{{ csrf_token() }}}" />

				<div class="form-group">
					<label>Descrição:</label>
					<input name="descricao" disabled class="form-control" value="{{ $pecas->descricao }}"/>
				</div>

				<div class="form-group">
					<label>Valor:</label>
					<input name="valor" disabled class="form-control" value="{{ $pecas->valor }}"/> 
				</div>

				<div class="form-group">
					<label>Quantidade:</label>
					<input name="quantidade" disabled type="number" class="form-control" value="{{ $pecas->quantidade }}"/> 
				</div>
			</form>
@stop
