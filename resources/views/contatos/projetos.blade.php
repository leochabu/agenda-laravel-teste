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
            <h1>Repositórios do Usuário <i>{{$usuario_gh}}</i></h1>
            <div class="row">
                <ul class="list-group">
                    @for($i=0;$i<count($responseBody);$i++) <li class="list-group-item">
                        {{$responseBody[$i]->name}}
                        </li>
                        @endfor
                </ul>
            </div>

        </div>
    </div>
</div>
@endsection