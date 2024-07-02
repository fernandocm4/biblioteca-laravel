<?php

namespace App\Http\Controllers;


class ListController extends Controller {

    public function listagem() {

        #$dias = 0;

        #$multa_atraso = 0.10 * $dias;

        $lista = [
                [
                    "id" => 1,
                    "nome" => "Fernando",
                    "email" => "maiafenando@gmail.com",
                    "contato" => "(42)9 9999-9999",
                    "livro" => "A biblioteca da meia noite",
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
                    "data_emprestimo" => "26/06/2024",
                    "dovolução_prevista" => "05/04/2024",
                    "multa_atraso" => 150.45
                ]
            ];

        return view('listagem', ['lista'=>$lista]);
    }

}