@extends('layout.main')

@section('content')

<div class="clientes">
    @foreach ($cliente as $key)
    {{ $key->nome }}
    @endforeach
</div>


<form action="/cadastro" method="POST">
    @csrf

    <div class="cadastrar">


        <h3>Cadastro de cliente</h3>
        <input type="text" placeholder="Nome" class="form-qtd" id="name" name="name" required>
        <input type="email" placeholder="Email" class="form-qtd" id="email" name="email" required>
        <input type="tel" placeholder="Telefone" class="form-qtd" id="telefone" name="telefone" pattern="[0-9]{5}-[0-9]{4}" required>
        <input type="text" placeholder="CPF" class="form-qtd" id="cpf" name="cpf" required>

    </div>
    <input type="submit" class="btn btn-primary" value="Cadastrar cliente">

</form>




@endsection