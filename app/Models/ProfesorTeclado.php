<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfesorTeclado extends Model
{
    //use HasFactory;
    protected $table='profesor_teclado';
    protected $primaryKey='id';
    protected $fillable = ['nombre', 'experiencia','video'];

    public $timestamps = false;
}
