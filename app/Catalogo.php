<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalogo extends Model
{
    //
    protected $table="catalogo";
    protected $primaryKey="id";
    protected $fillable=[
        "id",
        "descripcion",
    ];
}
