<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TiposAprendizaje1
 *
 * @property $id
 * @property $nombre
 * @property $estilo
 * @property $ritmo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TiposAprendizaje1 extends Model
{
  protected $table = 'tipos_aprendizaje_1';

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
    protected $fillable = ['nombre','estilo','ritmo'];



}
