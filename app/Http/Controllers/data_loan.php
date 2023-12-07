<?php

namespace App\Http\Controllers;
use App\Models\trx_loan;
use Illuminate\Http\Request;
use DB;

class data_loan extends Controller
{
    public function index(Request $request)
    {
		$uname = "Administrator";
		$sql = "SELECT 
			*, (select date_return from trx_return where trx_return.loan_idx=loan_id) date_return
		FROM trx_loan
		LEFT JOIN obj_car ON obj_car.car_id = trx_loan.car_idx AND date_start <> ''
		LEFT JOIN obj_loaner ON obj_loaner.user_id = trx_loan.loaner_idx";
		//echo $sql; exit();
		$posts = DB::select($sql);
		return view('loan/app',['title' => 'Pinjam Kendaraan', 'uname'=>$uname],compact('posts'));
	}
	
    public function baru(Request $request)
    {
		$uname = "Administrator";
		$posts = trx_loan::all();
		return view('loan/register',['title' => 'Data Kendaraan', 'uname'=>$uname],compact('posts'));
	}

    public function CarSelect($tglMulai)
    {
		
		$tgl=explode("V", $tglMulai);
		$tglMulai=$tgl[0];
		$tglSelesai=$tgl[1];
		$sql = "SELECT 
			car_id, model, merk, car_num, price_r_d
		FROM obj_car 
		LEFT JOIN trx_loan ON obj_car.car_id = trx_loan.car_idx 
		WHERE  
		(trx_loan.date_start is null AND trx_loan.date_end is null) OR ('".$tglMulai."'
		NOT BETWEEN trx_loan.date_start AND trx_loan.date_end
		AND '".$tglSelesai."'
		NOT BETWEEN trx_loan.date_start AND trx_loan.date_end)
		GROUP BY car_id, model, merk, car_num";
		$uname = "Administrator";
		//echo $sql; exit();
		$posts = DB::select($sql);
		return view('loan/selectCar',['title' => 'Pilih Kendaraan', 'uname'=>$uname],compact('posts'));
	}
	
	public function getCarById(Request $request) {
		$id = $request->input('id');
		$sql="SELECT * FROM obj_car WHERE car_id='".$id."' LIMIT 1";
		//echo $sql;
		$posts = DB::select($sql);
		foreach ($posts as $value){
			$array['car_id'] = $value->car_id;
			$array['car_num'] = $value->car_num;
			$array['merk'] = $value->merk;
			$array['model'] = $value->model;
			$array['price_r_d'] = $value->price_r_d;
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
			'date_start' => 'required',
			'date_end' => 'required',
			'price_r_d' => 'required',
		]);
		if(empty($request['loan_id'])){
			$price = DB::table('trx_loan')->max('loan_id');
			//$price = compact('price');
			//echo $price[0]; exit();
			$n_id= $price[0]+1;
			$id_u="0";
			$price_type="-";
			//obj_car::create($request->all());
			DB::table('trx_loan')->insert([
				'loan_id' =>$n_id,
				'car_idx' => $request->car_idx,
				'loaner_idx' => $id_u,
				'date_start' => $request->date_start,
				'date_end' => $request->date_end,
				'price' => $request->price_r_d,
				'price_type' =>'d',
			]);
			return redirect()->back()->withErrors(['msg' => 'Berhasil, Kontrak Sewa Ditambahkan.']);
		}else{
			return back()->withInput();
		}
    }

    public function edit($id)
    {
		$uname = "Administrator";
		//echo $id; exit();
		//$loan=DB::table('trx_loan')->where('loan_id', $id)->get();
		$sql = "SELECT 
			*
		FROM trx_loan
		LEFT JOIN obj_car ON obj_car.car_id = trx_loan.car_idx AND date_start <> ''
		LEFT JOIN obj_loaner ON obj_loaner.user_id = trx_loan.loaner_idx
		WHERE loan_id=".$id;
		//echo $sql; exit();
		$loan = DB::select($sql);
		//$posts = DB::table('trx_loan')->get();
		$sql = "SELECT 
			*, (select date_return from trx_return where trx_return.loan_idx=loan_id) date_return
		FROM trx_loan
		LEFT JOIN obj_car ON obj_car.car_id = trx_loan.car_idx AND date_start <> ''
		LEFT JOIN obj_loaner ON obj_loaner.user_id = trx_loan.loaner_idx";
		//echo $sql; exit();
		$posts = DB::select($sql);
		return view('loan/edit',['title' => 'Kontrak Sewa', 'uname'=>$uname],compact('loan', 'posts'));
	}

}
?>