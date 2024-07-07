@extends('layout.main')

@section('content')

<h2>Listagem de títulos emprestados</h2>
<hr>

<button type="button" class="btn btn-primary"> Novo emprestimo </button>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Cliente</th>
            <th scope="col">Título</th>
            <th scope="col">Data do emprestimo</th>
            <th scope="col">Contato</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($lista as $key)
            <tr>
                <td>{{ $key->clientes->nome }}</td>
                <td>{{ $key->titulo }}</td>
                <td>{{ $key->data_emprestimo }}</td>
                <td>{{ $key->clientes->telefone }}</td>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary">
                        Ver mais
                    </button>
                    
                </td>
            </tr>
        @endforeach
    </tbody>
</table>



@endsection