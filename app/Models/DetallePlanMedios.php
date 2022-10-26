<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetallePlanMedios extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'detalle_plan_medios';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'idPlanMedio',
        'idProgramaContacto',
        'idsMedioPlataforma',
        'tipoTier',
        'tipoNota',
        'tipoEtapa',
        'statusPublicado'
    ];

}
