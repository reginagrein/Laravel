@extends('layout')

@section('cabecalho')
    Adicionar Empresas
@endsection

@section('conteudo')
    <form method="post" action="/empresas">
        @csrf
        <div class="input-group d-flex justify-content-between">
            <label class="mr-2" for="nome">Nome: </label>
            <input type="text" class="form-control" id="nome" name="nome">
            <label class="ml-2 mr-2" for="site">Site: </label>
            <select id="site" name="site">                
                <option value="Alber">Alber</option>
                <option value="Ciee">CIEE</option>
                <option value="DigitalInnovation">Digital Innovation</option>
                <option value="Indicacao">Indicação</option>
                <option value="InfoJobs">Info Jobs</option>               
                <option value="Gupy">Gupy</option>
            </select>
        </div>
        <button class="btn btn-primary mt-2">Adicionar</button>
    </form>
@endsection


