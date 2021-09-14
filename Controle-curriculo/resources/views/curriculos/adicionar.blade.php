@extends('layout')

@section('cabecalho')
    Adicionar Curriculos
@endsection

@section('conteudo')
 <form method="post" action="/empresas/{{$empId}}/curriculos">
    @csrf
    <div>
        <label class="mr-2" for="data">Data: </label>
        <input type="date" class="form-control" id="data" name="data">
        <br>
        <label class="mr-2" for="status">Status: </label><br>
        <input type="status" class="form-control" id="status" name="status">
		<br>
    </div>
        <button class="btn btn-primary mt-2">Adicionar</button>
    </form>
@endsection
