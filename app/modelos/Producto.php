<?php

namespace App\modelos;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
   protected $table = 'productos';

   protected $fillable = ['cod_proveedor','cod_categoria','nom_producto','abrev_producto','est_producto','marca','precio'];

   protected $hidden = ['create_at', 'updated_up'];
}
