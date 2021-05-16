<?php

namespace App\Http\Controllers\atividade;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Atividade;
use Illuminate\Support\Facades\DB;

class AtividadeController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth:coordenador');
		
    }
	
    public function index(){

        $atividades = Atividade::all();

        return view('atividade.index',[
            'atividades' => $atividades
        ]);
    }

    public function nova(){

        return view('atividade.nova');
    }

    public function cadastrar(Request $resquest){

        $data_hora = date("Y/m/d H:i:s");
        $atividade = new Atividade();
        $atividade->data = $resquest->data;
        $atividade->nome = $resquest->nome;
		$atividade->descricao = $resquest->descricao;
        $atividade->created_at = $data_hora;
        $atividade->save();

        return redirect()->route('atividade.index')
                        ->with('success','Atividade cadastrada com sucesso.');

    }
	
	public function vincularAtividadeAluno(Request $request){

        
        $alunos_selecionados = $request->alunos_selecionados;
		$coordenador_id = $request->coordenador_id;
		$atividade_id = $request->atividade_id;
        
		if(!empty($alunos_selecionados)){

            $aluno_atividade = DB::table('aluno_atividade')->insert(
            ['loja' => $filial,
             'ultimo_envio' => $data_hora,
             'periodicidade' => $periodicidade,
             'integracao' => $integracao,
             'arquivo' => $nome_arquivo]
        );
                    
		}
		else{

			return redirect()->route('atividade.index')
							->with('status','vincule alunos a atividade.');

		}
	}
}
