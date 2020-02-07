<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedidoo extends Model
{
    protected $table = 'pedidoos';

   protected $fillable = ['nom_apellido','direccion','telefono','cantidad','id_producto'];

   protected $hidden = ['create_at', 'updated_up'];
}
