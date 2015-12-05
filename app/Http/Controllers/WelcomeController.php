<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{

  public function index()
  {

   return view('welcome');

  }
  /**
    * contact me form
    * @return contact view
   */
  public function contact()
  {

    return view('pages.contact');
  }

}


