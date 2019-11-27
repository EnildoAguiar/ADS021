@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastrar Condomínios</div>
                <div class="panel-body">

                    <form action="{{ url('condominio/salvar')}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Nome </label>
                            <input type="text" class="form-control" name="nome">
                        </div>
                        <div class="form-group">
                            <label>Endereço </label>
                            <input type="text" class="form-control" name="endereco">

                        </div>
                        <div class="form-group">
                            <label>CEP </label>
                            <input type="number" size="7" class="form-control" name="cep">
                        </div>
                        <div class="form-group">
                            <label>CNPJ</label>
                            <input type="number" class="form-control" name="cnpj">
                        </div>
                        <div class="form-group">
                            <label>Bairro</label>
                            <input type="text" class="form-control" name="bairro">
                        </div>
                        <div class="form-group">
                            <label>Cidade</label>
                            <input type="text" class="form-control" name="cidade">
                        </div>
                        <div class="form-group">
                            <label>UF</label>
                            <select class="form-control">
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                            </select>
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
