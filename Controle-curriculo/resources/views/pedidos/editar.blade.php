@extends('layout')

@section('cabecalho')
Editar Pedido
@endsection

@section('conteudo')
    <form method="post" action="/farmacias/{{$farmId}}/pedidos/{{$pedido->id}}">
        @csrf
        @method('PUT')
        <div>
            <label class="mr-2" for="data">Data: </label>
            <input type="date" class="form-control" id="data" name="data" value="{{$pedido->data}}">
            <br>
            <label class="mr-2" for="descricao">Descrição: </label><br>
            <textarea id="descricao" name="descricao" rows="3" cols="75">{{$pedido->descricao}}</textarea><br>
            <label class="mr-2" for="pedidoPor">Pedidor Por: </label>
            <input type="text" class="form-control" id="pedidoPor" name="pedidoPor" value="{{$pedido->pedidoPor}}">
            <br>
            <label class="mr-2" for="avaliacao">Avaliação: </label><br>
            <input type="text" class="form-control" id="avaliacao" name="avaliacao" value="{{$pedido->avaliacao}}">
            <br>
            <label class="mr-2" for="comentario">Comentário: </label><br>
            <textarea id="comentario" name="comentario" rows="5" cols="75">{{$pedido->comentario}}</textarea>
        </div>
        <button class="btn btn-primary mt-2">Editar</button>
    </form>
@endsection
