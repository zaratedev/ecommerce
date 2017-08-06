<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InShoppingCart extends Model
{
  protected $fillable = ['producto_id', 'shopping_cart_id'];
}
