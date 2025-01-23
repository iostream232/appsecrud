<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Maestro
 *
 * @property $id
 * @property $nombre
 * @property $grado
 * @property $created_at
 * @property $updated_at
 *
 * @property AlumnosGrado1[] $alumnosGrado1s
 * @property AlumnosGrado2[] $alumnosGrado2s
 * @property AlumnosGrado3[] $alumnosGrado3s
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Maestro extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'grado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','grado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alumnosGrado1s()
    {
        return $this->hasMany('App\Models\AlumnosGrado1', 'maestro_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alumnosGrado2s()
    {
        return $this->hasMany('App\Models\AlumnosGrado2', 'maestro_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alumnosGrado3s()
    {
        return $this->hasMany('App\Models\AlumnosGrado3', 'maestro_id', 'id');
    }
    

}
