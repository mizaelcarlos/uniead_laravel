<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inscricao extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'inscricao';

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
    protected $fillable = ['nome', 'inscricao','email', 'telefone', 'colegio_atual', 'emissor', 'serie', 'onde_ficou_sabendo'];

    
}
