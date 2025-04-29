<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;

    protected $table = "profesores";

    protected $primaryKey = "id_profesor";

    public $timestamps = true;

    protected $fillable = ['nombre','email','telefono','especialidad'] ;

    public function inscripciones()
    {
        return $this->hasMany(Inscripcion::class, 'id_profesor');
    }
}
