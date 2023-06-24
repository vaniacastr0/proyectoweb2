<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    use HasFactory;
    protected $table = 'imagenes';
    protected $primaryKey = 'Id';

    protected $fillable = [ 
        'Titulo','Archivo','Baneada','Motivo_ban','Cuenta_User'
    ];
    public $incrementing = false;
}
