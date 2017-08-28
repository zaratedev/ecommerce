<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrdersController extends Controller
{
  public function index()
  {
    $orders = Order::latest()->get();
    $totalMonth = Order::totalMonth();
    $totalMonthCount = Order::totalMonthCount();
    return view('orders.index',compact('orders','totalMonth','totalMonthCount'));
  }
}
