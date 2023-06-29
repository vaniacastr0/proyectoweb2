<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    use HasFactory;
    protected $table = 'imagenes';
    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $fillable = [ 
        'titulo','archivo','baneada','motivo_ban','cuenta_user'
    ];

    public function Cuenta():BelongsTo{
        return $this->belongsTo(Cuenta::class);
    }
    
}
