<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Emprestimo;
use App\Models\Cliente;
use App\Models\Cadastroemp;

class ListController extends Controller {

    public function listagem() {

        #$dias = 0;

        #$multa_atraso = 0.10 * $dias;

        $emprestimos = Emprestimo::with('clientes')->get();


        return view('listagem', ['lista'=>$emprestimos]);

    }

    public function listagem_cliente() {

        $clientes = Cliente::all();

        return view('listagem_cliente',['lista'=>$clientes]);
    }

    public function cadastroemp() {
        
        $cliente =  Cliente::all();

        return view('cadastroemp', ['cliente'=>$cliente]);
        
    }

    public function store(Request $request) {
        $novo_cadastro = new Cliente;

        $timezone = new \DateTimeZone('America/Sao_Paulo');
        $data = new \DateTime('now', $timezone);

        $novo_cadastro->nome = $request->name;
        $novo_cadastro->email = $request->email;
        $novo_cadastro->telefone = $request->telefone;
        $novo_cadastro->cpf = $request->cpf;
        $novo_cadastro->data_de_registro = $data;

        $novo_cadastro->save();

        return redirect('/');
    }

    public function deletar_cliente($id) {

        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        return redirect('/listagem-cliente');
    }

    public function edit($id) {
        $cliente = Cliente::findOrFail($id);

        return view('alterar_cliente', ['cliente'=>$cliente]);
    }

    public function alterar_cliente(Request $request, $id) {
        
        $cliente = Cliente::find($id);

        $timezone = new \DateTimeZone('America/Sao_Paulo');
        $data = new \DateTime('now', $timezone);

        $cliente->nome = $request->name;
        $cliente->email = $request->email;
        $cliente->telefone = $request->telefone;
        $cliente->cpf = $request->cpf;

        $cliente->save();

        return redirect('listagem-cliente');
    }

}