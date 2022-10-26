<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PlanMedios extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'plan_medios';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'campaign_id',
        'nombre',
        'descripcion',
        'status',
    ];
}
