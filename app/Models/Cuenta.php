<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    use HasFactory;
    protected $table = 'cuentas';
    protected $primaryKey = 'User';

    protected $fillable = [ 
        'Password','Nombre','Apellido','Perfil_Id'
    ];
    public $incrementing = false;

    public function Imagenes():HasMany{
        return $this->HasMany(Imagenes::class);
    }
}
