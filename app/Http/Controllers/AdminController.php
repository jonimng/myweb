<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Companies;
use App\User;
use App\Files;
use App\Invoices;
use App\Emails;




class AdminController extends Controller
{
    public function _construct()
    {
    	$this->middleware('admin');

    }

    public function index()
    {
    	$users = DB::table('users')->count();
    	$companies = DB::table('companies')->count();
    	$proc_file = DB::table('files')
	                ->where('processed', 1)
	                ->count();



    	return view('admin.dashbord',['proc_file'=> $proc_file,'companies'=> $companies,'users'=> $users]);
    }

}
