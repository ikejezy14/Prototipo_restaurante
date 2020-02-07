<?php

namespace App\modelos;

use Illuminate\Database\Eloquent\Model;

class pedido_producto extends Model
{
   protected $table = 'pedidos_productos';

   protected $fillable = ['cod_pedido','cod_producto'];

   protected $hidden = ['create_at', 'updated_up'];
}
