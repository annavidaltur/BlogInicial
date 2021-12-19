<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'categoria',
    ];

    // protected $table = "users"; // d'esta manera administraria la taula users a través el model Curso
}
