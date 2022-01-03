<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Carrera
 *
 * @property $id
 * @property $id_decanato
 * @property $nombre_carrera
 * @property $created_at
 * @property $updated_at
 *
 * @property Decanato $decanato
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Carrera extends Model
{
    
    static $rules = [
		'id_decanato' => 'required',
		'nombre_carrera' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_decanato','nombre_carrera'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function decanato()
    {
        return $this->hasOne('App\Models\Decanato', 'id', 'id_decanato');
    }
    

}
