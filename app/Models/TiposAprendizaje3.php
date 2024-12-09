<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TiposAprendizaje3
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
class TiposAprendizaje3 extends Model
{
    protected $table = 'tipos_aprendizaje_3';

    // Reglas de validación
    static $rules = [
        'nombre' => 'required',
        'estilo' => 'required',
        'ritmo' => 'required',
    ];

    protected $perPage = 20;

    // Atributos que deben ser asignados en masa
    protected $fillable = ['nombre', 'estilo', 'ritmo', 'alumno_id'];

    /**
     * Relación con el modelo AlumnosGrado3
     */
    public function alumnosGrado3()
    {
        return $this->hasOne('App\Models\AlumnosGrado3', 'id', 'alumno_id');
    }
}
