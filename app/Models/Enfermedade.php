<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Enfermedade
 *
 * @property $id
 * @property $prioridades_id
 * @property $nombre
 * @property $descripcion
 * @property $sintomas
 * @property $especialidad
 * @property $created_at
 * @property $updated_at
 *
 * @property Prioridade $prioridade
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Enfermedade extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['prioridades_id', 'nombre', 'descripcion', 'sintomas', 'especialidad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function prioridade()
    {
        return $this->belongsTo(\App\Models\Prioridade::class, 'prioridades_id', 'id');
    }
    
}
