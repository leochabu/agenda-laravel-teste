@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    Cadastro de contato
                    <form method="post" action="{{url('contatos/add')}}">
                        @csrf
                        <div class="row">
                            <div class="col col-6">
                                <label for="name">Nome</label>
                                <input type="text" class="form-control" name="name" id="name" required>
                            </div>

                            <div class="col col-2">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>

                            <div class="col col-2">
                                <label for="telefone">Telefone</label>
                                <input type="text" class="form-control" name="telefone" id="telefone" maxlength="10">
                            </div>

                            <div class="col col-2">
                                <label for="usuario_gh">User GitHub</label>
                                <input type="text" class="form-control" name="usuario_gh" id="usuario_gh">
                            </div>
                        </div>

                        <button class="btn btn-primary mt-2">Adicionar</button>
                    </form>


    </div>
</div>
@endsection