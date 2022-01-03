<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Interno
 *
 * @property $id
 * @property $carnet
 * @property $nombres
 * @property $apellidos
 * @property $id_decanato
 * @property $carrera
 * @property $sexo
 * @property $created_at
 * @property $updated_at
 *
 * @property Decanato $decanato
 * @property RegistroInterno[] $registroInternos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Interno extends Model
{
    
    static $rules = [
		'carnet' => 'required',
		'nombres' => 'required',
		'apellidos' => 'required',
		'id_decanato' => 'required',
		'carrera' => 'required',
		'sexo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['carnet','nombres','apellidos','id_decanato','carrera','sexo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function decanato()
    {
        return $this->hasOne('App\Models\Decanato', 'id', 'id_decanato');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function registroInternos()
    {
        return $this->hasMany('App\Models\RegistroInterno', 'id_alumno_interno', 'id');
    }
    

}
