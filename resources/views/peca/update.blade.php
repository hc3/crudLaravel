@extends('layout.principal')

@section('conteudo')
			<h1>Alterando pecas</h1>

			<form action="/pecas/atualizar/<?= $pecas->id ?>" method="post">
				<input type="hidden"
				name="_token" value="{{{ csrf_token() }}}" />

				<div class="form-group">
					<label>Descrição:</label>
					<input name="descricao" class="form-control" value="{{ $pecas->descricao }}"/>
				</div>

				<div class="form-group">
					<label>Valor:</label>
					<input name="valor" class="form-control" value="{{ $pecas->valor }}"/> 
				</div>

				<div class="form-group">
					<label>Quantidade:</label>
					<input name="quantidade" type="number" class="form-control" value="{{ $pecas->quantidade }}"/> 
				</div>

					<button type="submit" class="btn btn-primary btn-block">Update</button>
			</form>
@stop