<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'email', 'nombre', 'password','tipo', 'raza', 'edad','localidad'

    ];

    public function parties()
    {
        return $this->hasMany(Party::class);
    }
    public function mensajes()
    {
        return $this->hasMany(Mensaje::class);
    }
}
