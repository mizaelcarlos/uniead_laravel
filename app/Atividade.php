<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'atividade';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nome', 'data', 'descricao'];
	
	protected $dates = [
		'data'
	];
	

    public function alunos()
    {
       return $this->belongsToMany(Aluno::class);
    }
	
	public function coordenadores()
    {
       return $this->belongsToMany(Coordenador::class);
    }
	
	public static function VincularAtividadeAluno($filial, $data_hora, $periodicidade, $integracao,$nome_arquivo){


        $log_integracao = DB::table('log_integracao')->insert(
            ['loja' => $filial,
             'ultimo_envio' => $data_hora,
             'periodicidade' => $periodicidade,
             'integracao' => $integracao,
             'arquivo' => $nome_arquivo]
        );
    }
}
