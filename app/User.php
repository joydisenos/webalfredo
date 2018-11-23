<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password',
        'telefono',
        'documento',
        'pais',
        'ciudad',
        'codigo',
        'direccion',
        'nombre_emp',
        'nombre_com_emp',
        'cif_nif',
        'correo_emp',
        'telefono_emp',
        'pais_emp',
        'ciudad_emp',
        'codigo_emp',
        'tipo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
