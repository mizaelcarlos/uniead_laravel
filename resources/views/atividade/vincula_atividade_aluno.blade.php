@extends('layouts.coordenador-app')

@section('content')
</br>
        <div class="container">
			<div class="col-md-12">
                <div class="card">
                    <div class="card-header">Vincular atividade </div>
                        <div class="card-body">


                        <form action="{{ route('atividade.vincula_aluno') }}" method="POST">  
                          @csrf
                          <div class="container">
									
									
									<input type="hidden" NAME="atividade_id" value="{{ $atividade->id }}" >
									
									<div class="form-group col-md-12 col-md-10">
										<label for="nome" class="control-label">{{ 'Nome ' }}</label>
										<input type="text" name="nome" id="nome"  value="{{ $atividade->nome }}" class="form-control" placeholder="Nome" disabled>
									</div>
									
									<div class="form-group col-md-12">
                                        <p>Data: {{ $atividade->data->format('d/m/Y') }}"</p>
         
                                    </div>
									
									<div class="form-group col-md-12">
										<label for="descricao" class="control-label">{{ 'Descrição' }}</label>
										<textarea class="form-control" id="descricao" name="descricao"   rows="3" required disabled>{{ $atividade->descricao }}</textarea>
									</div>
                                    <div class="form-group col-md-12">
                                        <label for="alunos" class="control-label">{{ 'Alunos:' }}</label>
                                    </div>
                                    @foreach($alunos as $aluno)

									<div class="form-group col-md-12" class="form-check"> 
										<input type="checkbox" id="selecionado" name="selecionados[{{ $aluno->id }}]" value="{{ $aluno->id }}">
										<label class="form-check-label" >{{$aluno->nome}}</label>
									</div>
									@endforeach
										
                                    <div class="form-group">
                                    <button type="submit" class="btn btn-primary mb-3">
                                        Salvar 
                                    </button>
                                    </div>
    
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
@endsection
