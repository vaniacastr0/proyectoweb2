<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;
    protected $table = 'perfiles';
    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $fillable = [ 
        'nombre',
    ];
    
    public function Cuenta():HasMany{
        return $this->hasMany(Cuenta::class);
    }
}
