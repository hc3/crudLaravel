@extends('layout.principal')

@section('conteudo')
			<h1>Alterando serviços</h1>

			<form action="/servicos/atualizar/<?= $servicos->id ?>" method="post">
				<input type="hidden"
				name="_token" value="{{{ csrf_token() }}}" />

				<div class="form-group">
					<label>Descrição:</label>
					<input name="descricao" class="form-control" value="{{ $servicos->descricao }}"/>
				</div>

				<div class="form-group">
					<label>Valor:</label>
					<input name="valor" class="form-control" value="{{ $servicos->valor }}"/> 
				</div>

					<button type="submit" class="btn btn-primary btn-block">Update</button>
			</form>
@stop