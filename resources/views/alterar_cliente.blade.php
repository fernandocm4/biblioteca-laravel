@extends('layout.main')

@section('content')


<form id="update-form" action="/cadastro/alterar/{{ $cliente->id }}" method="POST">
    @csrf

    <div class="cadastrar">


        <h3>Alterar cliente</h3>
        <input type="text" placeholder="Nome" class="form-qtd" id="name" name="name" value="{{ $cliente->nome }}"
            required>
        <input type="email" placeholder="Email" class="form-qtd" id="email" name="email" value="{{ $cliente->email }}"
            required>
        <input type="tel" placeholder="Telefone" class="form-qtd" id="telefone" name="telefone"
            pattern="[0-9]{5}-[0-9]{4}" value="{{ $cliente->telefone }}" required>
        <input type="text" placeholder="CPF" class="form-qtd" id="cpf" name="cpf" value="{{ $cliente->cpf }}" required>

    </div>

    @method('PUT')

</form>

<button form="update-form" type="submit" class="btn btn-danger">
    Alterar
</button>



@endsection