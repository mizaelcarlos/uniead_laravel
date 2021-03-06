@extends('layouts.aluno-app')

@section('content')
<div class="container">
    
	<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-ligth">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a class="btn btn-outline-success" href="{{route('aluno.atividades')}}" title="Placeholder link title" class="text-decoration-none">
						Visualizar atividades
                   
					</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
