<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamentos extends Model
{
    protected $connection = 'pgsql2';
    protected $fillable = ['nome', 'id_empresa'];
}
