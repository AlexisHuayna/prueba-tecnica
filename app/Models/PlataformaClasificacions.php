<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PlataformaClasificacions extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'plataforma_clasifications';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'descripcion',
        'plataforma_id',
    ];
}
