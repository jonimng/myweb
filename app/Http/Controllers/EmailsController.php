<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Emails;


class EmailsController extends Controller
{
    public function index()
    {
        $emails = Emails::all();
        return view('emails.index',['emails'=> $emails]);
    }
}
