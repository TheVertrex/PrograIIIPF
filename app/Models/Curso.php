<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table = "cursos";

    protected $primaryKey = "id_curso";

    public $timestamps = true;

    protected $fillable = ['nombre','descripcion'] ;

    public function inscripciones()
    {
        return $this->hasMany(Inscripcion::class, 'id_curso');
    }
}
