<?php

namespace App\Http\Controllers;
use App\Models\obj_car;
use Illuminate\Http\Request;
use DB;

class data_car extends Controller
{
    //
    public function index(Request $request)
    {
		$uname = "Administrator";
		$posts = DB::table('obj_car')->get();
		return view('car/app',['title' => 'Data Kendaraan', 'uname'=>$uname], compact('posts'));
	}

    public function edit($id)
    {
		$uname = "Administrator";
		//echo $id; exit();
		$car=DB::table('obj_car')->where('car_id', $id)->get();
		
		$posts = DB::table('obj_car')->get();
		return view('car/edit',['title' => 'Ubah Kendaraan', 'uname'=>$uname],compact('car', 'posts'));
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
		//echo "tambah";exit();
		$request->validate([
		  'merk' => 'required',
		  'model' => 'required',
		  'car_num' => 'required',
		  'price_r_d' => 'required',
		]);
		if(empty($request['car_id'])){
			$price = DB::table('obj_car')->max('car_id');
			//$price = compact('price');
			//echo $price[0]; exit();
			$n_id= $price[0]+1;
			$id_u="0";
			$addr="-";
			//obj_car::create($request->all());
			DB::table('obj_car')->insert([
				'name_loaner' =>$id_u,
				'car_id' => $n_id,
				'merk' => $request->merk,
				'addr' => $addr,
				'model' => $request->model,
				'car_num' => $request->car_num,
				'price_r_d' => $request->price_r_d,
			]);
			return redirect()->back()->withErrors(['msg' => 'Berhasil, Data Kendaraan Ditambahkan.']);
		}else{
			return back()->withInput();
		}
    }

    public function update(Request $request)
    {
        // yrib. test
		$uname = "Administrator";
		$request->validate([
		   'car_id' => 'required',
		  'merk' => 'required',
		  'model' => 'required',
		  'car_num' => 'required',
		  'price_r_d' => 'required',
		]);
		//if(empty($request->car_id)){
			$id_u=$uname;
			$addr="-";
			//obj_car::create($request->all());
			DB::table('obj_car')-> where('car_id',$request->car_id)->update([
				'name_loaner' =>$id_u,
				'merk' => $request->merk,
				'addr' => $addr,
				'model' => $request->model,
				'car_num' => $request->car_num,
				'price_r_d' => $request->price_r_d,
			]);
			return redirect()->back()->withErrors(['msg' => 'Berhasil, Data Kendaraan Diperbaharui.']);

    }

  public function destroy($id)
  {
	// Need Flag for disable enable data  mobil to loan
	
	
  }
}
