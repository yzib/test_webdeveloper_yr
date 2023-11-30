<?php

namespace App\Http\Controllers;
use App\Models\obj_car;
use Illuminate\Http\Request;

class data_car extends Controller
{
    //
    public function index(Request $request)
    {
		$uname = "Administrator";
		$posts = obj_car::all();
		return view('car/app',['title' => 'Data Kendaraan', 'uname'=>$uname],compact('posts'));
	}
	
    public function baru(Request $request)
    {
		$uname = "Administrator";
		$posts = obj_car::all();
		return view('car/register',['title' => 'Data Kendaraan', 'uname'=>$uname],compact('posts'));
	}
	
    public function tambah(Request $request)
    {
        // yrib. test
		$request->validate([
		  'car_id' => 'required',
		  'merk' => 'required',
		  'model' => 'required',
		  'car_num' => 'required',
		  'price_r_d' => 'required',
		]);
		exit();
		obj_car::create($request->all());
		return redirect()->route('index') ->with('Berhasil','data kendaraan Ditambahkan.');
    }
}
