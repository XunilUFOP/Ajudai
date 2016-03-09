<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use View;

class ErrorController extends Controller
{
    //
    public function e503() {
      return View::make('errors/503');
    }
}
