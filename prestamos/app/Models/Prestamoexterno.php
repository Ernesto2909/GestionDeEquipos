<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Prestamoexterno
 *
 * @property $id
 * @property $id_alumno_externo
 * @property $id_equipo
 * @property $fecha
 * @property $created_at
 * @property $updated_at
 *
 * @property Equipo $equipo
 * @property Externo $externo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Prestamoexterno extends Model
{
    
    static $rules = [
		'id_alumno_externo' => 'required',
		'id_equipo' => 'required',
		'fecha' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_alumno_externo','id_equipo','fecha'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function equipo()
    {
        return $this->hasOne('App\Models\Equipo', 'id', 'id_equipo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function externo()
    {
        return $this->hasOne('App\Models\Externo', 'id', 'id_alumno_externo');
    }
    

}
