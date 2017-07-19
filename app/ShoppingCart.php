<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{

  protected $fillable = ['status'];

  public function inShoppingCarts()
  {
    return $this->hasMany("App\inShoppingCart");
  }

  public function productos()
  {
    return $this->belongsToMany('App\Producto','in_shopping_carts');
  }

  public function productosSize()
  {
    return $this->productos()->count();
  }

  public function total()
  {
    return $this->productos()->sum('pricing');
  }
  public static function findOrCreateBySessionID($shopping_cart_id)
  {
    if ($shopping_cart_id) {
      //Buscar el carrito de compras con este ID
      return ShoppingCart::findBySession($shopping_cart_id);
    }else {
      # Crear carrito de compras
      return ShoppingCart::createWithoutSession($shopping_cart_id);
    }
  }

  public static function findBySession($shopping_cart_id)
  {
    return ShoppingCart::find($shopping_cart_id);
  }

  public static function createWithoutSession()
  {
    return ShoppingCart::create([
      'status' => 'incompleted'
    ]);
  }
}
