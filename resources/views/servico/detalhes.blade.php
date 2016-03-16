@extends('layout.principal')

@section('conteudo')
			<h1>Alterando serviços</h1>

			<form>
				<input type="hidden"
				name="_token" value="{{{ csrf_token() }}}" />

				<div class="form-group">
					<label>Descrição:</label>
					<input name="descricao" disabled class="form-control" value="{{ $servicos->descricao }}"/>
				</div>

				<div class="form-group">
					<label>Valor:</label>
					<input name="valor" disabled class="form-control" value="{{ $servicos->valor }}"/> 
				</div>

			</form>
@stop
