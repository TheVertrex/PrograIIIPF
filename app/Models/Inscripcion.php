<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    use HasFactory;

    protected $table = "inscripciones";

    protected $primaryKey = "id_inscripcion";

    public $timestamps = true;

    protected $fillable = ['id_alumno','id_nivel','id_curso','id_profesor','fecha_inscripcion'] ;
}
