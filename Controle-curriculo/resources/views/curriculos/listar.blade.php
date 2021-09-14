@extends('layout')

@section('cabecalho')
    Curriculos de {{$nomeEmp}}
@endsection

@section('conteudo')
<a href="/empresas/{{$empId}}/curriculos/create" class="btn btn-dark mb-2">Criar Novo</a>
<ul class="list-group">
    @foreach($curriculos as $curriculo)
    <li class="list-group-item d-flex justify-content-between">
         <div>  
             <ul class="list-group list-group-horizontal">
                <li class = "list-group-item list-group-item-info">{{$curriculo->data}}</li>
                <li class ="list-group-item list-group-item-secondary">{{$curriculo->status}}</li>
            </ul>
        </div>
        <span class = "d-flex algin-items-center">         
        <form method="post" action="/empresas/{{$empId}}/curriculos/{{$curriculo->id}}"
            onsubmit= "return confirm('Tem certeza que deseja Remover o Pedido?')">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm btn-sm mr-2">Excluir</buton>               
        </form>    
        <a href="/empresas/{{$empId}}/curriculos/{{$curriculo->id}}/edit" 
        class =" btn btn-warning btn-sm mr-2">Editar</a> 
        <a href="/empresas" 
        class =" btn btn-secondary btn-sm mr-2">Voltar</a> 
       </span>
     </li>
    @endforeach
</ul>
@endsection


