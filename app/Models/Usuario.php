<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'password',
        'foto',
    ];

    protected $guarded = [
        'email',
    ] ;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',       
    ] ;


     /**
     * Nombre real de la tabla
     *
     * @var string
     */
    protected $table = "usuario" ;

    /**
     * Nombre real de la clave primaria
     *
     * @var string
     */
    protected $primaryKey = "idUsu" ;

    //
    public $timestamps = false ;


}
