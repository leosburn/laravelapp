<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
      $coolstring = 'Hello from controller.';

      return view('subviews.hello', compact('coolstring') );
    }
}
