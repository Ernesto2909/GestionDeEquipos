<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Decanato
 *
 * @property $id
 * @property $nombre_decanato
 * @property $created_at
 * @property $updated_at
 *
 * @property Carrera[] $carreras
 * @property Interno[] $internos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Decanato extends Model
{
    
    static $rules = [
		'nombre_decanato' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_decanato'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function carreras()
    {
        return $this->hasMany('App\Models\Carrera', 'id_decanato', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function internos()
    {
        return $this->hasMany('App\Models\Interno', 'id_decanato', 'id');
    }
    

}
