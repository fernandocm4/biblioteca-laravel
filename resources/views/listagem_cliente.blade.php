@extends('layout.main')

@section('content')

<h2>Listagem de clientes</h2>
<hr>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Telefone</th>
            <th scope="col">CPF</th>
            <th scope="col">Data de cadastro</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($lista as $key)
            <tr>
                <td>{{ $key->nome }}</td>
                <td>{{ $key->email }}</td>
                <td>{{ $key->telefone }}</td>
                <td>{{ $key->cpf }}</td>
                <td>{{ $key->data_de_registro }}</td>
                <td>

                    <a class="btn btn-primary" href="/cadastro/{{ $key->id }}" role="button">Atualizar</a>

                    <form id="delete-form" action="/clientes/{{ $key->id }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">
                            Excluir
                        </button>
                        @method('DELETE')
                    </form>

                </td>
            </tr>
        @endforeach
    </tbody>
</table>



@endsection