<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Prioridade
 *
 * @property $id
 * @property $nombre
 * @property $color
 * @property $nivel_prioridad
 * @property $created_at
 * @property $updated_at
 *
 * @property Enfermedade[] $enfermedades
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Prioridade extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'color', 'nivel_prioridad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function enfermedades()
    {
        return $this->hasMany(\App\Models\Enfermedade::class, 'id', 'prioridades_id');
    }
    
}
