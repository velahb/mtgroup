<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfesorCuerdas extends Model
{
    protected $table='profesor_cuerdas';
    protected $primaryKey='id';
    protected $fillable = ['nombre', 'experiencia','video'];

    public $timestamps = false;
}
