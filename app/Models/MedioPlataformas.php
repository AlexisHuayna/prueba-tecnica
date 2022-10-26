<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MedioPlataformas extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'medio_plataformas';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'medio_id',
        'idPlataformaClasificacion',
        'valor',
        'alcance',
        'observacion',
    ];

}
