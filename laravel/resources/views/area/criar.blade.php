@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastrar Áreas</div>
                <div class="panel-body">

                    <form action="{{ url('area/salvar')}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Área</label>
                            <input type="text" class="form-control" name="area">
                        </div>
                        <label>Situação</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ativo">
                            <label class="form-check-label">Ativa</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inativa">
                            <label class="form-check-label">Inativa</label>
                        </div>
                        <button class="btn btn-primary">Salvar</button>
                        <a href=" {{ url('area/listar') }}" class="btn btn-warning">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
