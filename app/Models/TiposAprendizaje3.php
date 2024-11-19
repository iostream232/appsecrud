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
 * @property AlumnosGrado3 $alumnosGrado3
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TiposAprendizaje3 extends Model
{
  protected $table = 'tipos_aprendizaje_3';
    static $rules = [
		'nombre' => 'required',
		'estilo' => 'required',
		'ritmo' => 'required',
		'alumno_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','estilo','ritmo','alumno_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function alumnosGrado3()
    {
        return $this->hasOne('App\Models\AlumnosGrado3', 'id', 'alumno_id');
    }
    

}
