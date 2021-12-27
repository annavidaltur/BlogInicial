<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Curso extends Model
{
    use HasFactory;

    // Campos que queremos que se guarden
    // protected $fillable = ['name', 'description', 'categoria'];
    
    // Campos que no queremos que se guarden, los demás (name, description...) sí se guardan
    protected $guarded = [];
    
    // protected $table = "users"; // d'esta manera administraria la taula users a través el model Curso
}
