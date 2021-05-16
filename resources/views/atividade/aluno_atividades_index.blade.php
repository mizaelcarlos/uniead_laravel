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
							<th>Descricao</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($atividades as $atividade)
                        <tr>
							<td>{{ $atividade->nome }}</td>
                            <td>{{ date("d/m/Y",strtotime($atividade->data)) }}</td>
							<td>{{ $atividade->descricao }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                
                   
        </div>
    </div>
</div>
@endsection
