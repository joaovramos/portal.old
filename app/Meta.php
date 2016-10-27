<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    protected $connection = 'pgsql2';
    protected $fillable = ['nome', 'indicador', 'meta', 'medicao', 'peso', 'id_departamento'];
}
