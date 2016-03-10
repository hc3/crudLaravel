<?php

namespace estoque\Http\Controllers;

use Illuminate\Http\Request;

use estoque\Http\Requests;
use estoque\Cliente;
use estoque\Endereco;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    

	public function lista() {

		$clientes = Cliente::all();

		return view('cliente.listagem')->with('clientes',$clientes);
	}

	public function novo() {
		return view('cliente.formulario');
	}

	public function adiciona(Request $request) {

		$cliente = new Cliente();
		$endereco = new Endereco();
		$endereco->rua = $request->input('rua');
		$endereco->bairro = $request->input('bairro');
		$endereco->cep = $request->input('cep');
		$endereco->cidade = $request->input('cidade');
		$endereco->uf = $request->input('uf');
		$endereco->save();
		$cliente->endereco_id = 1;
		$cliente->nome = $request->input('nome');
		$cliente->idade = $request->input('idade');
		$cliente->cpf = $request->input('cpf');
		$cliente->email = $request->input('email');
		$cliente->telefone = $request->input('telefone');

		$cliente->save();

		return redirect()->action('ClienteController@lista');

	}

}
