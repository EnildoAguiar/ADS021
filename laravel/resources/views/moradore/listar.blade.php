@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Listagem de Moradores</div>
                <div class="panel-body">
                   
                    <table class="table">
                        <tr>
                            <th>Unidade</th>
                            <th>Morador</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            
                            
                       @foreach ($moradores as $moradore)
                        <tr>
                            <td>{{ $moradore->unidade_id }}</td>
                            <td>{{ $moradore->nome }}</td>
                            <td>{{ $moradore->email }}</td>
                            <td>{{ $moradore->telefone }}</td>
                            </tr>
                        @endforeach 
                    </table>
                     <a href= " {{ url('moradore/criar') }}" class="btn btn-success">Adicionar</a>
                                <a href= " {{ url('moradore/'.$moradore->id.'/editar') }}" class="btn btn-success">Editar</a>
                                <a href= " {{ url('moradore/'.$moradore->id.'/remover') }}" class="btn btn-danger">Remover</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
