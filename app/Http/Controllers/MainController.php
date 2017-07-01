<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
      $user = "Jonathan";
      return view('main.home',compact('user'));
    }
}
