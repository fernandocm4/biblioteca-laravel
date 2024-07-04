<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Emprestimo;
use App\Models\Cliente;

class ListController extends Controller {

    public function listagem() {

        #$dias = 0;

        #$multa_atraso = 0.10 * $dias;

        $emprestimos = Emprestimo::with('clientes')->get();

        $lista = [
                [
                    "id" => 1,
                    "nome" => "Fernando",
                    "email" => "maiafenando@gmail.com",
                    "contato" => "(42)9 9999-9999",
                    "livro" => "A biblioteca da meia noite",
                    "autor" => "Matt Haig",
                    "data_emprestimo" => "26/06/2024",
                    "dovolução_prevista" => "05/07/2024",
                    "multa_atraso" => 0
                ],
                [
                    "id" => 2,
                    "nome" => "Maria",
                    "email" => "maria@gmail.com",
                    "contato" => "(42)9 9999-9999",
                    "livro" => "Sherlock Holmes e o Cão dos Baskerville",
                    "autor" => "Arthur Conan Doyle",
                    "data_emprestimo" => "26/06/2024",
                    "dovolução_prevista" => "05/07/2024",
                    "multa_atraso" => 0
                ],
                [
                    "id" => 3,
                    "nome" => "Amanda",
                    "email" => "amanda@gmail.com",
                    "contato" => "(42)9 9999-9999",
                    "livro" => "As armas da persuasão",
                    "autor" => "Rober B. Cialdini",
                    "data_emprestimo" => "26/06/2024",
                    "dovolução_prevista" => "05/04/2024",
                    "multa_atraso" => 150.45
                ]
            ];

        return view('listagem', ['lista'=>$emprestimos]);
        #return view('listagem')->with(compact('users'));
    }

}