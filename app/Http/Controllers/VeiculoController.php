<?php

namespace estoque\Http\Controllers;

use Illuminate\Http\Request;

use estoque\Http\Requests;
use estoque\Veiculo;

class VeiculoController extends Controller
{
    public function lista() {

    	return view('veiculo.listagem');
    }

    public function novo() {
    	return view('veiculo.formulario');
    }

    public function adiciona(Request $request) {
    	$veiculo = new Veiculo();
    	

    }

}
