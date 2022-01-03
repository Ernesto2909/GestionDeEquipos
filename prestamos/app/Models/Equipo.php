<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Equipo
 *
 * @property $id
 * @property $nombre_equipo
 * @property $descripcion_equipo
 * @property $id_estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Estado $estado
 * @property RegistroExterno[] $registroExternos
 * @property RegistroInterno[] $registroInternos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Equipo extends Model
{
    
    static $rules = [
		'nombre_equipo' => 'required',
		'descripcion_equipo' => 'required',
		'id_estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_equipo','descripcion_equipo','id_estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estado()
    {
        return $this->hasOne('App\Models\Estado', 'id', 'id_estado');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function registroExternos()
    {
        return $this->hasMany('App\Models\RegistroExterno', 'id_equipo', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function registroInternos()
    {
        return $this->hasMany('App\Models\RegistroInterno', 'id_equipo', 'id');
    }
    

}
