<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProgramaContactos extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'programa contactos';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'programa_id',
        'idContacto',
        'tipoInfluencia',
        'idsMedioPlataforma',
        'observacion',
        'activo',
    ];
}
