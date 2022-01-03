<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Prestamointerno
 *
 * @property $id
 * @property $id_alumno_interno
 * @property $id_equipo
 * @property $fecha
 * @property $created_at
 * @property $updated_at
 *
 * @property Equipo $equipo
 * @property Interno $interno
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Prestamointerno extends Model
{
    
    static $rules = [
		'id_alumno_interno' => 'required',
		'id_equipo' => 'required',
		'fecha' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_alumno_interno','id_equipo','fecha'];


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
    public function interno()
    {
        return $this->hasOne('App\Models\Interno', 'id', 'id_alumno_interno');
    }
    

}
