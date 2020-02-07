<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productoo extends Model
{
    protected $table = 'productoos';

   protected $fillable = ['nombre_producto','precio'];

   protected $hidden = ['create_at', 'updated_up'];
}
