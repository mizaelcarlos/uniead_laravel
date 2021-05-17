<?php

namespace App\Http\Controllers\atividade;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Atividade;
use Illuminate\Support\Facades\DB;
use App\Aluno;
use Auth;

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
	
	public function vincularAluno($id){
		
		$atividade = Atividade::find($id);
        $alunos = Aluno::All();

        return view('atividade.vincula_atividade_aluno', [
            'atividade' => $atividade,
			'alunos' => $alunos
        ]);
    }
	
	public function vinculaAluno(Request $request){

        
        $alunos_selecionados = $request->selecionados;
		$coordenador_id = Auth::user()->id; 
		$atividade_id = $request->atividade_id;
        
		if(!empty($alunos_selecionados)){


			foreach($alunos_selecionados as $aluno_id)
			{
				            
				$aluno_atividade = Aluno::AlunoVinculadoAtividade($aluno_id,$atividade_id);
				
				if(empty($aluno_atividade))
				{
					var_dump($aluno_atividade);
					$aluno_atividade = DB::table('aluno_atividade')->insert(
					['aluno_id' => $aluno_id,
					 'atividade_id' => $atividade_id,
					 'coordenador_id' => $coordenador_id]
					);
					
				}
				else
				{
					
					$aluno_atividade = DB::table('aluno_atividade')
					->where('aluno_id','=',$aluno_id)
					->where('atividade_id','=',$atividade_id)
					->update(
					['aluno_id' => $aluno_id,
					 'atividade_id' => $atividade_id,
					 'coordenador_id' => $coordenador_id]
					);
				}
				
			}
			return redirect()->route('atividade.vincular_aluno',$atividade_id)
							->with('status','Atividade vinculada com sucesso.'.$aluno_atividade[0]);
                    
		}
		else{

			return redirect()->route('atividade.vincular_aluno',$atividade_id)
							->with('status','vincule alunos a atividade.');

		}
	}
}
