@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <div class="row">
                    Repositórios do usuário
                </div>

                
                @for($i=0;$i<count($responseBody);$i++)
                <li>
                    {{$responseBody[$i]->name}}
                </li>
                @endfor

            </div>
        </div>
    </div>
    @endsection