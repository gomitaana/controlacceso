<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condominio extends Model
{
    protected $connection = 'controlacceso';
    protected $table = 'condominios';

    protected $primaryKey = 'id';

    //protected $guarded = ["id", "created_at", "updated_at"];
    protected $fillable = ["nombreCondominio", "paisCondominio", "estadoCondominio", "direccionCondominio", "codigoPostalCondominio", "totalDeCasasCondominio"];
}
