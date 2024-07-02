@extends('layout.main')

@section('content')

<h2>Listagem de títulos emprestados</h2>
<hr>



<table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Cliente</th>
        <th scope="col">Título</th>
        <th scope="col">Contato</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($lista as $key)
            <tr>
                <th scope="row">{{$key['id']}}</th>
                <td>{{$key['nome']}}</td>
                <td>{{$key['livro']}}</td>
                <td>{{$key['contato']}}</td>
                <td>
                    <button type="button" class="btn btn-primary">Ver mais</button>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>


@endsection