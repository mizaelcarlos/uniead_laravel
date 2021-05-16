@extends('layouts.coordenador-app')

@section('content')
</br>
        <div class="container">
			<div class="col-md-12">
                <div class="card">
                    <div class="card-header">Cadastrar atividade </div>
                        <div class="card-body">


                        <form action="{{ route('atividade.cadastrar') }}" method="POST">  
                          @csrf
                          <div class="container">
									
									
			
									<div class="form-group col-md-12" col-md-10" {{ $errors->has('nome') ? 'has-error' : ''}}">
										<label for="nome" class="control-label">{{ 'Nome *' }}</label>
										<input type="text" name="nome" id="nome"  class="form-control" placeholder="Nome" required>
										{!! $errors->first('nome', '<p class="help-block">:message</p>') !!}
									</div>
									
									<div class="form-group col-md-12" {{ $errors->has('Data') ? 'has-error' : ''}}">
                                        <label for="data" class="control-label">{{ 'Data' }}</label>
                                        <input class="form-control" name="data" type="date" id="data"  required>
                                        {!! $errors->first('data', '<p class="help-block">:message</p>') !!}
                                    </div>
									
									<div class="form-group col-md-12" {{ $errors->has('descricao') ? 'has-error' : ''}}">
										<label for="descricao" class="control-label">{{ 'Descrição' }}</label>
										<textarea class="form-control" id="descricao" name="descricao" rows="3" required></textarea>
										{!! $errors->first('descricao', '<p class="help-block">:message</p>') !!}
									</div>
                                
                                                        
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
