@extends('layouts.coordenador-app')

@section('content')

<div class="card-body bg-white">
    <div class="container">
        <h1 class="display-4"></h1>
        <h2>Consulta de atividades</h2>
		
		
    </div>
</div>

@if(session()->has('status'))
   <div class="alert alert-danger" role="alert">   
        <p>{{session()->get('status')}}</p>
    </div>
@endif


<div class="container">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Data</th>
                            <th>Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($atividades as $atividade)
                        <tr>
							 <td>{{ $atividade->nome }}</td>
                            <td>{{ $atividade->data->format('d/m/Y') }}</td>
                            <td>
                                <a class="btn btn btn-outline-primary" href="{{ route('atividade.vincular_atividade_aluno',$atividade->id) }}">Vincular atividade</a>
    
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <a class="btn btn-outline-success" href="{{url('atividade/nova')}}" title="Placeholder link title" class="text-decoration-none">
                Cadastrar atividade
                   
                </a>
                   
        </div>
    </div>
</div>
@endsection
