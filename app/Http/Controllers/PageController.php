<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
  public function index()
  {
    return view('guest.index');
  }

  public function about()
  {
  }
}
