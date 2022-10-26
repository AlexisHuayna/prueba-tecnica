<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Medios extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'medios';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'nombre',
        'alias',
        'tipoRegion',
        'observacion',
    ];

}
