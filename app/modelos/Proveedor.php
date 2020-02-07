<?php

namespace App\modelos;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
   protected $table = 'proveedores';

   protected $fillable = ['nom_proveedor','tel_proveedor','est_proveedor'];

   protected $hidden = ['create_at', 'updated_up'];
}
