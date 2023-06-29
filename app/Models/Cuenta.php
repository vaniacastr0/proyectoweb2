<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Cuenta extends Authenticable
{
    use HasFactory;
    protected $table = 'cuentas';
    protected $primaryKey = 'user';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [ 
        'password','nombre','apellido','perfil_id'
    ];

    public function Perfil():BelongsTo{
        return $this->belongsTo(Perfil::class);
    } 

    public function Imagen():HasMany{
        return $this->hasMany(Imagen::class);
    }
}
