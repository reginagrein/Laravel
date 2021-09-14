@extends('layout')

@section('cabecalho')
    Editar Empresa
@endsection

@section('conteudo')
    <form method="post" action="/empresas/{{$empresa->id}}">
        @csrf
        @method('PUT')
    <div class="input-group d-flex justify-content-between">
        <label class="mr-2" for="nome">Nome: </label>
        <input type="text" class="form-control" id="nome" 
            name="nome" value="{{$empresa->nome}}">
        <label class="ml-2 mr-2" for="site">Site: </label>
        <select id="site" name="site">                
                <option value="Alber" {{$empresa->site == 'Alber' ? 'selected' : ''}}>
                    Alber</option>
                <option value="Ciee" {{$empresa->site == 'Ciee' ? 'selected' : ''}}>
                    CIEE</option>
                <option value="DigitalInnovation" {{$empresa->site == 'DigitalInnovation' ? 'selected' : ''}}>
                    Digital Innovation</option>
                <option value="Indicacao" {{$empresa->site == 'Indicação' ? 'selected' : ''}}>
                    Digital Innovation</option>
                <option value="InfoJobs" {{$empresa->site == 'InfoJobs' ? 'selected' : ''}}>
                    Info Jobs</option>                
                <option value="Gupy" {{$empresa->site == 'Gupy' ? 'selected' : ''}}>
                    Gupy</option>
            </select>
        </div>
        <button class="btn btn-primary mt-2">Editar</button>    
    </form>
@endsection
 
