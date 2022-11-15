<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class IndexController extends Controller
{
  public function index(): View
  {
    return view("pages.index");
  }
}
