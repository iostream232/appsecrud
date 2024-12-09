<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TiposAprendizaje2
 *
 * @property $id
 * @property $nombre
 * @property $estilo
 * @property $ritmo
 * @property $alumno_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TiposAprendizaje2 extends Model
{
    protected $table = 'tipos_aprendizaje_2';

    static $rules = [
        'nombre' => 'required',
        'estilo' => 'required',
        'ritmo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'estilo', 'ritmo', 'alumno_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function alumnosGrado2()
    {
        return $this->hasOne('App\Models\AlumnosGrado2', 'id', 'alumno_id');
    }
}
