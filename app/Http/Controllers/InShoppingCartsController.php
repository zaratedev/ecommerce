<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShoppingCart;
use App\InShoppingCart;

class InShoppingCartsController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $shopping_cart_id = \Session::get('shopping_cart_id');

      $shopping_cart = ShoppingCart::findOrCreateBySessionID($shopping_cart_id );

      $response = InShoppingCart::create([
        'shopping_cart_id' => $shopping_cart->id,
        'producto_id' => $request->producto_id
      ]);

      if (false) {
        return redirect('/carrito');
      }else{
        return back();
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
