<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Externo
 *
 * @property $id
 * @property $nombres
 * @property $apellidos
 * @property $institucion
 * @property $sexo
 * @property $nivel_educativo
 * @property $created_at
 * @property $updated_at
 *
 * @property RegistroExterno[] $registroExternos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Externo extends Model
{
    
    static $rules = [
		'nombres' => 'required',
		'apellidos' => 'required',
		'institucion' => 'required',
		'sexo' => 'required',
		'nivel_educativo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombres','apellidos','institucion','sexo','nivel_educativo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function registroExternos()
    {
        return $this->hasMany('App\Models\RegistroExterno', 'id_alumno_externo', 'id');
    }
    

}
