<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfesorVoz extends Model
{
    //use HasFactory;
    protected $table='profesor_voz';
    protected $primaryKey='id';
    protected $fillable = ['nombre', 'experiencia','video'];

    public $timestamps = false;
}
