<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class data_return extends Controller
{
    //yrib test_task 07-12-2023
    public function index(Request $request)
    {
		$uname = "Administrator";
		$sql = "SELECT trx_return.return_id, trx_return.date_start start_date_return, count_date, price_done, trx_return.price_type price_ty_return, 
		over_c_date, over_price, over_ty_price, trx_loan.*,obj_car.*,obj_loaner.*
		FROM trx_return
		LEFT JOIN trx_loan ON trx_loan.loan_id = trx_return.loan_idx
		LEFT JOIN obj_car ON obj_car.car_id = trx_return.car_idx AND trx_return.date_return <> ''
		LEFT JOIN obj_loaner ON obj_loaner.user_id = trx_return.loaner_idx";
		//echo $sql; exit();
		$posts = DB::select($sql);
		return view('return/app',['title' => 'Pengembalian Kendaraan', 'uname'=>$uname],compact('posts'));
	}
	
    public function CarSelect($id)
    {
		$uname = "Administrator";
		if($id==0){
			
		}else{
			$sql = "SELECT loan_id,
				car_id, model, merk, car_num, price_r_d, trx_loan.date_start date_start, trx_loan.date_end date_end, 
				(select date_return from trx_return where trx_return.loan_idx=loan_id) date_return
			FROM obj_car 
			LEFT JOIN trx_loan ON obj_car.car_id = trx_loan.car_idx 
			WHERE trx_loan.date_start <>'' AND trx_loan.date_end <>''
			AND date_return IS null
			GROUP BY car_id, model, merk, car_num, trx_loan.date_start, trx_loan.date_end ";
			//echo $sql; exit();
			$posts = DB::select($sql);
			return view('return/selectCar',['title' => 'Pilih Peminjaman', 'uname'=>$uname],compact('posts'));
		}
	}
	
	public function getCarById(Request $request) {
		$id = $request->input('id');
		$sql="SELECT * FROM trx_loan
		LEFT JOIN obj_car ON trx_loan.car_idx = obj_car.car_id 
		WHERE loan_id='".$id."' LIMIT 1";
		//echo $sql;
		$posts = DB::select($sql);
		foreach ($posts as $value){
			$array['car_id'] = $value->car_idx;
			$array['loan_id'] = $value->loan_id;
			$array['car_num'] = $value->car_num;
			$array['merk'] = $value->merk;
			$array['model'] = $value->model;
			$array['price_r_d'] = $value->price_r_d;
			$array['date_start'] = $value->date_start;
			$array['date_end'] = $value->date_end;
			$array['count_date'] = dateDiff($value->date_start, $value->date_end);
		}
		//$resultArray = json_decode(json_encode($posts), true);
		
		return $array;
	}
	
    public function tambah(Request $request)
    {
        // yrib. test
		//echo "tambah";exit();
		$request->validate([
			'car_idx' => 'required',
			'loan_id' => 'required',
			'price_done' => 'required',
			'date_start' => 'required',
			'date_return' => 'required',
			'over_c_date' => 'required',
			'over_price' => 'required',
		]);
		if(empty($request['return_id'])){
			$price = DB::table('trx_return')->max('return_id');
			//$price = compact('price');
			//echo $price[0]; exit();
			$n_id= $price[0]+1;
			$id_u="0";
			$price_type="-";
			//obj_car::create($request->all());
			DB::table('trx_return')->insert([
				'return_id' =>$n_id,
				'loan_idx' =>$request->loan_id,
				'car_idx' => $request->car_idx,
				'loaner_idx' => $id_u,
				'date_return' => $request->date_start,
				'date_start' => $request->date_end,
				'price_done' => $request->price_done,
				'count_date' => $request->count_date,
				'price_type' =>'d',
				'over_c_date' =>$request->over_c_date,
				'over_price' =>$request->over_price,
				'over_ty_price' =>'d',
			]);
			return redirect()->back()->withErrors(['msg' => 'Berhasil, Pengembalian Disimpan.']);
		}else{
			return back()->withInput();
		}
    }

    public function edit($id)
    {
		$uname = "Administrator";
		//echo $id; exit();
		//$loan=DB::table('trx_loan')->where('loan_id', $id)->get();
		$sql = "SELECT trx_return.return_id, trx_return.date_return , trx_return.date_start start_date_return, count_date, price_done, trx_return.price_type price_ty_return, 
		over_c_date, over_price, over_ty_price, trx_loan.*,obj_car.*,obj_loaner.*
		FROM trx_return
		LEFT JOIN trx_loan ON trx_loan.loan_id = trx_return.loan_idx
		LEFT JOIN obj_car ON obj_car.car_id = trx_return.car_idx AND trx_return.date_return <> ''
		LEFT JOIN obj_loaner ON obj_loaner.user_id = trx_return.loaner_idx
		WHERE trx_return.return_id=".$id;
		//echo $sql; exit();
		$return = DB::select($sql);
		
		$sql = "SELECT trx_return.return_id, trx_return.date_start start_date_return, count_date, price_done, trx_return.price_type price_ty_return, 
		over_c_date, over_price, over_ty_price, trx_loan.*,obj_car.*,obj_loaner.*
		FROM trx_return
		LEFT JOIN trx_loan ON trx_loan.loan_id = trx_return.loan_idx
		LEFT JOIN obj_car ON obj_car.car_id = trx_return.car_idx AND trx_return.date_return <> ''
		LEFT JOIN obj_loaner ON obj_loaner.user_id = trx_return.loaner_idx";
		//echo $sql; exit();
		$posts = DB::select($sql);
		return view('return/edit',['title' => 'Sewa Selesai', 'uname'=>$uname],compact('return', 'posts'));
	}
	
}
