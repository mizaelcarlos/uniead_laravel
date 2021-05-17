<?php

namespace App\Http\Controllers\aluno;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Aluno;

class AlunoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:aluno');
		
    }
	
	public function index()
	{
		return view('aluno');
	}
	
	public function atividades()
	{
		
		$user_id = Auth::user()->id; 
		
		$atividades = Aluno::obterAtividadesAluno($user_id);
			
		return view('atividade.aluno_atividades_index',[
            'atividades' => $atividades,
			'user' => $user_id,
        ]);
	}
}
