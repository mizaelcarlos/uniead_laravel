<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class Aluno extends Authenticatable
{
    use Notifiable;
	
	protected $guard = 'aluno';
	
    protected $table = 'aluno';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
	
	public function atividades()
    {
       return $this->belongsToMany(Atividade::class);
    }

	public static function obterAtividadesAluno($aluno_id)
	{
		
		$atividades = DB::table('aluno')
            ->join('aluno_atividade', 'aluno.id', '=', 'aluno_atividade.aluno_id')
            ->join('atividade', 'atividade.id', '=', 'aluno_atividade.atividade_id')
			->where('aluno.id','=',$aluno_id)
            ->select('atividade.*')
            ->get();
			
		return $atividades;
	}
	
	public static function AlunoVinculadoAtividade($aluno_id,$atividade_id)
	{
		
		$atividades = DB::connection('mysql')->select("
		SELECT * FROM aluno_atividade WHERE aluno_id = $aluno_id and atividade_id = $atividade_id");
		
			
			
		return $atividades;
	}
    
}