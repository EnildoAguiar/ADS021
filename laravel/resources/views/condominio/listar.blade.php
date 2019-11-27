@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Listagem de Condomínios</div>
                <div class="panel-body">
                    
                    <table class="table">
                        <tr>
                            <th>Nome:</th>
                            <th>CNPJ:</th>
                            <th>Cidade:</th>
                            <th>UF:</th>
                            
                       @foreach ($condominios as $condominio)
                        <tr>
                            <td>{{ $condominio->nome }}</td>
                            <td>{{ $condominio->cnpj }}</td>
                            <td>{{ $condominio->cidade }}</td>
                            <td>{{ $condominio->uf }}</td>
                           
                        </tr>
                        @endforeach
                    </table>   
                        
                        <a href= " {{ url('condominio/criar') }}" class="btn btn-success">Adicionar</a>
                        <a href= " {{ url('condominio/'.$condominio->id.'/editar') }}" class="btn btn-success" >Editar</a>
                        <a href= " {{ url('condominio/'.$condominio->id.'/remover') }}" class="btn btn-danger">Remover</a> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

