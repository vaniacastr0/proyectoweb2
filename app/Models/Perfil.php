<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;
    protected $table = 'perfiles';
    protected $primaryKey = 'Id';

    protected $fillable = [ 
        'Nombre'
    ];
    public $incrementing = false;

    public function Cuentas():HasMany{
        return $this->HasMany(Cuentas::class);
    }
}
