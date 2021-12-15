<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juego extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre', 'compania', 'descripcion'

    ];
    // public function parties()
    // {
    //     return $this->hasMany(Party::class);
    // }
}
