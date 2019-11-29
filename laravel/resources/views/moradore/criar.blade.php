@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastrar Moradores</div>
                <div class="panel-body">

                    <form action="{{ url('moradore/salvar')}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Condomínio</label>
                            <input type="text" class="form-control" name="condominio">
                        </div>
                       <div class="form-group">
                            <label>Unidade</label>
                            <input type="number" class="form-control" name="unidade">
                        </div>
                        <div class="form-group">
                            <label>Nome do Morador</label>
                            <input type="text" class="form-control" name="morador">
                        </div>
                        <div class="form-group">
                            <label>CPF</label>
                            <input type="number" class="form-control" name="cpf">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label>Telefone</label>
                            <input type="number" class="form-control" name="telefone">
                        </div>
                        <div class="form-group">
                            <label>Veículo</label>
                            <input type="text" class="form-control" name="veiculo">
                        </div>
                        <div class="form-group">
                            <label>Placa</label>
                            <input type="text" class="form-control" name="placa">
                        </div>
                        <button class="btn btn-primary">Salvar</button>
                        <a href=" {{ url('moradore/listar') }}" class="btn btn-warning">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
