<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class permiso extends Model
{
    protected $table = 'permisos';

    protected $fillable = [
        'name',
        'descripcion'
    ];
}
