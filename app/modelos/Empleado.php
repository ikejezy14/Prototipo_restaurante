<?php

namespace App\modelos;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
   protected $table = 'empleados';

   protected $fillable = ['cod_local','nom_empleado','cargo_empleado','est_empleado'];

   protected $hidden = ['create_at', 'updated_up'];
}
