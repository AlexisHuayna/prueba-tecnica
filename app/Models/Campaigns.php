<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Campaigns extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'campaigns';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'titulo',
        'fechaFin',
        'cliente_id',
        'observacion',
        'tipoPublico',
        'tipoObjetivo',
        'tipoAudiencia',
        'interesPublico',
        'novedad',
        'actualidad',
        'autoridadCliente',
        'mediaticoCliente',
        'autoridadVoceros',
        'mediaticoVoceros'
    ];
}
