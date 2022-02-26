@extends('layouts.layout')

@section('cabecalho')
    Adicionar contato
@endsection

@section('conteudo')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" >
    @csrf
    <div class="row">
        <div class="col col-6">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>

        <div class="col col-2">
            <label for="email">E-mail</label>
            <input type="text" class="form-control" name="email" id="email">
        </div>

        <div class="col col-2">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" name="telefone" id="telefone">
        </div>

        <div class="col col-2">
            <label for="usuario_gh">User GitHub</label>
            <input type="text" class="form-control" name="usuario_gh" id="usuario_gh">
        </div>
    </div>

    <button class="btn btn-primary mt-2">Adicionar</button>
</form>
@endsection