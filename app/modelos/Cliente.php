<?php

namespace App\modelos;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
   protected $table = 'clientes';

   protected $fillable = ['nombre','ape_paterno','ape_materno','direccion','telefono'];

   protected $hidden = ['create_at', 'updated_up'];
}
