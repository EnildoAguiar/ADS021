@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Listagem de Áreas</div>
                <div class="panel-body">
                   
                    <table class="table">
                        <tr>
                            <th>Área</th>
                            <th>Situação</th>
                            
                       @foreach ($areas as $area)
                        <tr>
                            <td>{{ $area->area }}</td>
                            <td>{{ $area->situação }}</td>
                            </tr>
                        @endforeach 
                    </table>
                     <a href= " {{ url('area/criar') }}" class="btn btn-success">Adicionar</a>
                                <a href= " {{ url('area/'.$area->id.'/editar') }}" class="btn btn-success">Editar</a>
                                <a href= " {{ url('area/'.$area->id.'/remover') }}" class="btn btn-danger">Remover</a>
                   {{ $areas->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
