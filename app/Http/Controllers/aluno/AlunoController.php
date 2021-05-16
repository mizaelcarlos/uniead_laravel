<?php

namespace App\Http\Controllers\aluno;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
		
		$atividades = DB::table('aluno')
            ->join('aluno_atividade', 'aluno.id', '=', 'aluno_atividade.aluno_id')
            ->join('atividade', 'atividade.id', '=', 'aluno_atividade.atividade_id')
			->where('aluno.email','=',Request::session()->get('ALUNO_EMAIL'))
            ->select('atividade.*')
            ->get();
			
		return view('atividade.aluno_atividades_index',[
            'atividades' => $atividades
        ]);
	}
}
