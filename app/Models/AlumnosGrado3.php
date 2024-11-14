<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AlumnosGrado3
 *
 * @property $id
 * @property $nombre_alumno
 * @property $nombre_tutor_1
 * @property $telefono_tutor_1
 * @property $nombre_tutor_2
 * @property $telefono_tutor_2
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class AlumnosGrado3 extends Model
{
  protected $table = 'alumnos_grado_3';
    static $rules = [
		'nombre_alumno' => 'required',
		'nombre_tutor_1' => 'required',
		'telefono_tutor_1' => 'required',
		'nombre_tutor_2' => 'required',
		'telefono_tutor_2' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_alumno','nombre_tutor_1','telefono_tutor_1','nombre_tutor_2','telefono_tutor_2'];



}
