<!DOCTYPE html>
<html ng-app="listaVeiculos">
<head>
	<title>Lista Veiculos</title>
	<link href='/css/bootstrap.min.css' rel="stylesheet">
	<style>
		.jumbotron {
			width:400px;
			text-align:center;
			margin-left:auto;
			margin-right:auto;
			margin-top:20px;
		}
		.table {
			margin-top:20px;
		}
		.form-control {
			margin-bottom:20px;
		}
	</style>
	<script src="/js/angular.min.js"></script>
	<script>
		angular.module("listaVeiculos",[]);
		angular.module('listaVeiculos').controller("listaVeiculosController",function ($scope) {
			$scope.app = "lista Veiculos";
			$scope.contatos = [
				{nome:"pedro",telefone:"992211222"},
				{nome:"pedro",telefone:"992211222"},
				{nome:"pedro",telefone:"992211222"}
			];
			$scope.adicionarContato = function(contato) {
				$scope.contatos.push(contato);
				delete $scope.contato;
			}
		});
		
	</script>
</head>
<body ng-controller="listaVeiculosController">
	<div class="jumbotron">
		<table class="table table-striped">
			<tr>
				<th>Nome</th>
				<th>Telefone</th>
			</tr>
			<tr ng-repeat="contato in contatos">
				<td>{{contato.nome}}</td>
				<td>{{contato.telefone}}</td>
			</tr>
		</table>
		<hr/>
		<input class="form-control" type="text" ng-model="contato.nome" placeholder="Nome" />
		<input class="form-control" text="text" ng-model="contato.telefone" placeholder="Telefone" />
		<button class="btn btn-primary btn-block" ng-click="adicionarContato(contato)" ng-disabled="!contato.nome || !contato.telefone">Adicionar</button>
		{{contato}}
	</div>
</body>
</html>