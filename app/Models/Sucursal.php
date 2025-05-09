<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;

    protected $table = "sucursales";

    protected $primaryKey = "id_sucursal";

    public $timestamps = true;

    protected $fillable = ['nombre', 'ubicacion'] ;

    public function alumnos()
    {
        return $this->hasMany(Alumno::class, 'id_sucursal');
    }
}
