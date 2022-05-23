<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfesorPercusion extends Model
{
    protected $table='profesor_percusion';
    protected $primaryKey='id';
    protected $fillable = ['nombre', 'experiencia','video'];

    public $timestamps = false;
}
