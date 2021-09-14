@extends('layout')

@section('cabecalho')
    Editar Curriculos
@endsection

@section('conteudo')
 <form method="post" action="/empresas/{{$empId}}/curriculos/{{$curriculo->id}}">
        @csrf
        @method('PUT')
        <div>
            <label class="mr-2" for="data">Data: </label>
            <input type="date" class="form-control" id="data" name="data" value="{{$curriculo->data}}">
            <br>

            <label class="mr-2" for="status">status: </label><br>
            <input type="text" class="form-control" id="status" name="status"
                value="{{$curriculo->status}}">

        </div>
        <button class="btn btn-primary mt-2">Editar</button>
    </form>
@endsection
