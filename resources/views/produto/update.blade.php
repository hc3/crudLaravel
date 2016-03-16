@extends('layout.principal')

@section('conteudo')
			<h1>Alterando produto</h1>

			<form action="/produtos/atualizar/<?= $produtos->id ?>" method="post">
				<input type="hidden"
				name="_token" value="{{{ csrf_token() }}}" />

				<div class="form-group">
					<label>Nome:</label>
					<input name="nome" class="form-control" value="{{ $produtos->nome }}"/>
				</div>

				<div class="form-group">
					<label>Descrição:</label>
					<input name="descricao" class="form-control" value="{{ $produtos->descricao }}"/>
				</div>

				<div class="form-group">
					<label>Valor:</label>
					<input name="valor" class="form-control" value="{{ $produtos->valor }}"/> 
				</div>

				<div class="form-group">
					<label>Quantidade:</label>
					<input name="quantidade" type="number" class="form-control" value="{{ $produtos->quantidade }}"/> 
				</div>

					<button type="submit" class="btn btn-primary btn-block">Update</button>
			</form>
@stop