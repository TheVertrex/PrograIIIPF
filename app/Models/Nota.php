<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;

    protected $table = "notas";

    protected $primariKey = "id_nota";

    public $timestamps = true;

    protected $fillable = ['id_inscripcion','punteo','observacion'] ;
}
