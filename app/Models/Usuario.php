<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use Notifiable;

    protected $table = 'usuario'; // Nombre correcto de la tabla en la base de datos
    protected $primaryKey = 'idUsuario'; // Clave primaria

    protected $fillable = [
        'DNI',
        'password', // Asegúrate de incluir el campo password en fillable
    ];

    protected $hidden = [
        'password', // Este campo debería estar aquí
    ];

    public $timestamps = true; // Asegúrate de que esto esté en true

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
}
