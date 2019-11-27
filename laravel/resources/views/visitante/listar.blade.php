@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Listagem de Visitantes</div>
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <th>Unidade</th>
                            <th>Visitante</th>
                            <th>RG</th>
                            
                            
                       @foreach ($visitantes as $visitante)
                        <tr>
                            <td>{{ $visitante->unidade_id }}</td>
                            <td>{{ $visitante->nome }}</td>
                            <td>{{ $visitante->rg }}</td>
                            
                           
                        </tr>
                        @endforeach
                    </table>   
                        
                        <a href= " {{ url('visitante/criar') }}" class="btn btn-success">Adicionar</a>
                        <a href= " {{ url('visitante/'.$visitante->id.'/editar') }}" class="btn btn-success" >Editar</a>
                        <a href= " {{ url('visitante/'.$visitante->id.'/remover') }}" class="btn btn-danger">Remover</a> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection