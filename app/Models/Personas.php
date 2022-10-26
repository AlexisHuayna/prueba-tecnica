<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Personas extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'personas';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'apellidos',
        'nombres',
        'apodo',
        'genero',
        'fechaNacimiento',
        'profesion',
        'observacion',
        'famoso',
    ];

}
