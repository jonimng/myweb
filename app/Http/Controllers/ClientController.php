<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
   public function _construct()
    {
      $this->middleware('client');

    }

    public function index()
    {
      return view('client.index');
    }

}
