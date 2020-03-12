<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
	protected $connection = 'controlacceso';
    protected $table = 'Persona';

    protected $primaryKey = 'idPersona';

    //protected $guarded = ["idPersona", "created_at", "updated_at"];
    protected $fillable = ["nombrePersona", "apellidosPersona", "telefonoPersona", "generoPersona", "fechaNacimientoPersona"];
}
