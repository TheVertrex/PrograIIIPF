<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
    use HasFactory;

    protected $table = "grados";

    protected $primaryKey = "id_grados";

    public $timestamps = true;
    
    protected $fillable = ['nombre'] ;
}
