<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class data_loan extends Controller
{
    public function index(Request $request)
    {
		$uname = "Administrator";
		$posts = trx_loan::all();
		return view('loan/app',['title' => 'Pinjam Kendaraan', 'uname'=>$uname],compact('posts'));
	}
	
    public function baru(Request $request)
    {
		$uname = "Administrator";
		$posts = trx_loan::all();
		return view('car/register',['title' => 'Data Kendaraan', 'uname'=>$uname],compact('posts'));
	}
	
}
