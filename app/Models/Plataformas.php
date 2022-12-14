<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plataformas extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'plataformas';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'descripcion',
    ];
}
