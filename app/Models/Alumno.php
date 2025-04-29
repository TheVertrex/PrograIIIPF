<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $table = "alumnos";

    protected $primaryKey = "id_alumno";

    public $timestamps = true;
    
    protected $fillable = ['nombre','email','numero','direccion','id_sucursal'] ;

    public function sucursal()
    {
        return $this->belongsTo(Sucursal::class, 'id_sucursal');
    }

    public function inscripciones()
    {
        return $this->hasMany(Inscripcion::class, 'id_alumno');
    }
}
