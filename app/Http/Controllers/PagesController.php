<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

  public function about() {

    $people = ['Pluto', 'Pippo', 'Paperino'];
    //    $people = [];

    //compact is php function that gest variables 
    //from the current scope and creates an associative array 
    return view('pages.about', compact('people'));

  }
  //
}
