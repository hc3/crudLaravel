@extends('layout.principal')

@section('conteudo')
<script type="text/javascript">
$(document).ready(function(){
	$('.buscar').on('click',function(){
		var id = $(this).attr('id');
		var objJson = $(this).data('id');
		
		console.log('o id é: '+id);
		console.log('o index é: '+objJson);
		//$('#modalBuscar').html(id[$('.buscar').val()].nome);
		$('#prodNome').val(objJson[id].nome);
		$('#prodDesc').val(objJson[id].descricao);
		$('#prodVal').val(objJson[id].valor);
		$('#prodQnt').val(objJson[id].quantidade);
		$('#divBuscar').modal('show');
	});
	$('.editar').on('click',function(){
		var id = $(this).attr('id');
		var objJson = $(this).data('id');
		var idUpdate = $(this).attr('value');
		
		console.log('o id é: '+id);
		console.log('o index é: '+objJson);
		//console.log('o id do objeto é :'+idUpdate);
		//$('#modalBuscar').html(id[$('.buscar').val()].nome);
		$('#prodNomeEdit').val(objJson[id].nome);
		$('#prodDescEdit').val(objJson[id].descricao);
		$('#prodValEdit').val(objJson[id].valor);
		$('#prodQntEdit').val(objJson[id].quantidade);
		$('#divAlterar').modal('show');
		$('#formUpdate').attr('action','/produtos/atualizar/'+idUpdate);
	});
	$('#tabelaProduto').DataTable();
});
</script>

@if(empty($produtos))
<div class="alert alert-danger">
Você não tem produtos cadastrados
</div>
@else
<div class="container">
	<h1>Produtos</h1>
<!--  BOTÃO QUE CHAMA O MODAL PARA CADASTRAR PRODUTO   -->
	<button class="demo btn btn-primary btn-large" data-toggle="modal" href="#responsive">Cadastrar</button>
<!--#######################################################################################-->
<!--#######################################################################################-->
<!--#######################################################################################-->
<!-- MODAL PARA CADASTRAR PRODUTO -->
	<div id="responsive" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
		<div class="modal-header">
    		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    		<h4 class="modal-title">Inserir Produto</h4>
  		</div>
<div class="modal-body">
	<form action="/produtos/adiciona" method="post">
			<input type="hidden"
			name="_token" value="{{{ csrf_token() }}}" />

			<div class="form-group">
			<label>Nome:</label>
			<input name="nome" class="form-control"/>
			</div>

			<div class="form-group">
			<label>Descrição:</label>
			<input name="descricao" class="form-control"/>
			</div>

			<div class="form-group">
			<label>Valor:</label>
			<input name="valor" class="form-control"/>
			</div>

			<div class="form-group">
			<label>Quantidade:</label>
			<input name="quantidade" type="number" class="form-control"/>
			</div>

			<button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
	</form>
 </div>
</div>
<!-- FIM MODAL -->
<!--#######################################################################################-->
<!--#######################################################################################-->
<!--#######################################################################################-->
	</br>
	</br>
	<table id="tabelaProduto" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nome</th>
			<th>Descrição</th>
			<th>Valor</th>
			<th>Quantidade</th>
			<th></th>
			<th></th>
			<th></th>
		</tr>
	</thead>
		
	<tbody>
		<tr>
		@foreach ($produtos as $key=>$p)

<!--#######################################################################################-->
<!--#######################################################################################-->
<!--#######################################################################################-->
<!-- INICIO DO MODAL DE UPDATE PRODUTO -->

<div id="divAlterar" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 class="modal-title">Alterar Produto</h4> 
 </div>
 <div class="modal-body">
	<form id="formUpdate" method="post">
		<input type="hidden"
		name="_token" value="{{{ csrf_token() }}}" />

		<div class="form-group">
	 			<label>Nome:</label>
			<input name="nome" class="form-control" id="prodNomeEdit" value="{{ $p->nome }}"/>
		</div>

		<div class="form-group">
			<label>Descrição:</label>
			<input name="descricao" class="form-control" id="prodDescEdit" value="{{ $p->descricao }}"/>
		</div>

		<div class="form-group">
			<label>Valor:</label>
			<input name="valor" class="form-control" id="prodValEdit" value="{{ $p->valor }}"/> 
		</div>

		<div class="form-group">
			<label>Quantidade:</label>
			<input name="quantidade" type="number" class="form-control" id="prodQntEdit" value="{{ $p->quantidade }}"/> 
		</div>

			<button type="submit" class="btn btn-primary btn-block">Update</button>
	</form>
  </div>

</div>


<!-- FIM DO MODAL DE UPDATE -->
<!--#######################################################################################-->
<!--#######################################################################################-->
<!--#######################################################################################-->



		
		<td> {{ $p->id }} </td>
		<td> {{ $p->nome }}  </td>
		<td> {{ $p->descricao }} </td>
		<td> {{ $p->valor }} </td>
		<td> {{ $p->quantidade }} </td>	
		<!-- 
			MENU 
			#BUSCAR
			#REMOVER
			#ALTERAR
		-->
		<td align="center">
			<a class="buscar" id="{{ $key }}" data-toggle="modal" data-id="{{ $produtos }}">
			<span class="glyphicon glyphicon-eye-open"></span>
			</a>
		</td>

		<td align="center">
			<a href="/produtos/remove/{{ $p->id }}">
			<span class="glyphicon glyphicon-trash"> </span>
			</a>
		</td>
		<td align="center">
			<a class="editar" id="{{ $key }}" data-toggle="modal" data-id="{{ $produtos }}" value="{{ $p->id }}"> 
			<span class="glyphicon glyphicon-pencil"></span>
			</a>
		</td>
		</tr>
		@endforeach
	</tbody>

</table>
<!--#######################################################################################-->
<!--#######################################################################################-->
<!--#######################################################################################-->
<!-- INICIO DO MODAL DE LISTAGEM DE PRODUTO  -->
<div id="divBuscar" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 class="modal-title">Visualizar Produto</h4> 
 </div>
 <div class="modal-body" id="modalBuscar">
		<form>
			<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

			<div class="form-group">
				<label>Nome:</label>
				<input name="nome" id="prodNome" disabled class="form-control" id="nomePrd"/>
			</div>

			<div class="form-group">
				<label>Descrição:</label>
				<input name="descricao" id="prodDesc" disabled class="form-control"/>
			</div>

			<div class="form-group">
				<label id="total">Valor:</label>
				<input name="valor" id="prodVal" disabled class="form-control"/> 
			</div>

			<div class="form-group">
				<label>Quantidade:</label>
				<input name="quantidade" id="prodQnt" type="number" disabled class="form-control"/> 
			</div>
		</form>
  </div>

</div>
<!-- FIM DO MODAL DE LISTAGEM-->


	@endif
	@if(old('nome'))
	<div class="alert alert-success">
		<strong>Sucesso!</strong> O Produto {{ old('nome') }} foi adicionado com sucesso
	</div>
@endif
@stop
