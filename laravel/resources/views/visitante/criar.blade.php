@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastrar Visitantes do Condomínio</div>
                <div class="panel-body">

                    <form action="{{ url('visitante/salvar')}}" method="post">
                        {{ csrf_field() }} 
                        <div class="form-group">
                            <label>Condomínio </label>
                            <input type="text" class="form-control" name="condominio">
                        </div>
                        <div class="form-group">
                            <label>Unidade </label>
                            <input type="number" class="form-control" name="unidade">
                        </div>
                        <div class="form-group">
                            <label>Visitante </label>
                            <input type="text" class="form-control" name="visitante">
                        </div>
                        <div class="form-group">
                            <label>RG</label>
                            <input type="number" class="form-control" name="rg">
                        </div>

                        <button class="btn btn-primary">Salvar</button>
                        <a href=" {{ url('visitante/listar') }}" class="btn btn-warning">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
