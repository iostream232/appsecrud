<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TiposAprendizaje1
 *
 * @property $id
 * @property $alumno_id
 * @property $estilo
 * @property $ritmo
 * @property $created_at
 * @property $updated_at
 *
 * @property AlumnosGrado1 $alumnosGrado1
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TiposAprendizaje1 extends Model
{
  protected $table = 'tipos_aprendizaje_1';
    static $rules = [
		'alumno_id' => 'required',
		'estilo' => 'required',
		'ritmo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['alumno_id','estilo','ritmo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function alumnosGrado1()
    {
        return $this->hasOne('App\Models\AlumnosGrado1', 'id', 'alumno_id');
    }
    

}
