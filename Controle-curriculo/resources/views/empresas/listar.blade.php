@extends('layout')

@section('cabecalho')
    Empresas
@endsection

@section('conteudo')

<a href="/empresas/create" class="btn btn-dark mb-2">Criar Novo</a>
<ul class="list-group">
    @foreach($empresas as $emp)
   <li class="list-group-item d-flex justify-content-between">
    <div>
        <ul class="list-group list-group-horizontal">
                <li class="list-group-item list-group-item-info">{{ $emp->nome }}</li>
                <li class="list-group-item list-group-item-secondary">{{ $emp->site }}</li>
            </ul>
        </div>
        <span class = "d-flex algin-items-center">         
        <form method="post" action="/empresas/{{$emp->id}}"
            onsubmit= "return confirm('Tem certeza que deseja Remover {{ $emp->nome }}?')">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm btn-sm mr-2">Excluir</buton>               
        </form>    
        <a href = "/empresas/{{ $emp->id }}/edit" class =" btn btn-warning btn-sm mr-2">Editar</a> 
        <a href = "/empresas/{{ $emp->id }}/curriculos" class =" btn btn-primary btn-sm">Ver Curriculo</a>               
        </span>
    </li>
    @endforeach
</ul>
@endsection


