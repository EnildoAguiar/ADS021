@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Listagem de Unidades</div>
                <div class="panel-body">
                   
                    <table class="table">
                        <tr>
                            <th>Unidade</th>
                            <th>Propietário</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            
                            
                       @foreach ($unidades as $unidade)
                        <tr>
                            <td>{{ $unidade->numero}}</td>
                            <td>{{ $unidade->propietario }}</td>
                            <td>{{ $unidade->email }}</td>
                            <td>{{ $unidade->telefone }}</td>
                            </tr>
                        @endforeach 
                    </table>
                     <a href= " {{ url('unidade/criar') }}" class="btn btn-success">Adicionar</a>
                                <a href= " {{ url('unidade/'.$unidade->id.'/editar') }}" class="btn btn-success">Editar</a>
                                <a href= " {{ url('moradore/'.$unidade->id.'/remover') }}" class="btn btn-danger">Remover</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection