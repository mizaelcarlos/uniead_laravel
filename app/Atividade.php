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
	
	
}
