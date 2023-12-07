<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\user_car;
use App\Models\User;
use DB;
class clas_user extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	/**
	 
	*/
	   
	public function register()
    {
        $data['title'] = 'Register';
        return view('user/register', $data);
    }

    public function login()
    {
        $data['title'] = 'Login';
        return view('user/login2', $data);
    }

    public function login_action(Request $request)
    {
         $credential = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
		$sql="SELECT * FROM obj_loaner WHERE username='" .$credential['username']."' AND password='". $credential['password']."' LIMIT 1";
		// $sql;exit();
		$logi = DB::select($sql);
		if(empty($logi)){
			//return redirect()->route('login') ->with('User tidak ditemukan','Coba kembali.');
			return redirect()->route('login');
		}else{
			$previous_name = session_name("LOGIN SUC");
			session_start();
			foreach ($logi as $value){
				$_SESSION['Username'] = $value->username;
				$_SESSION['name']     = $value->name_loaner;
				$_SESSION['uid']     = $value->id_num;
				$_SESSION['time']     = time();
			}
			return redirect()->route('home');
		}

    }
     public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')
            ->withSuccess('You have logged out successfully!');;
    }  
	
    public function index()
    {
        //yrib
		$indexing = user::all();
		return view('app4', compact('indexing'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function regiss(Request $request)
    {
        // yrib. test
		$request->validate([
		  'name_loaner' => 'required|max:64',
		  'addr' => 'required|max:255',
		  'phone' => 'required|max:16',
		  'id_num' => 'required|max:16',
		  'Username' => 'required|max:18|min:8',
		  'password' => 'required|max:16|min:8',
		  'id_num' => 'required|max:16'
		]);
		$price = DB::table('obj_loaner')->max('user_id');
			//$price = compact('price');
			//echo $price[0]; exit();
			$n_id= $price[0]+1;
		DB::table('obj_loaner')->insert([
		  'user_id' => $n_id,
		  'name_loaner' => $request->name_loaner,
		  'addr' => $request->addr,
		  'phone' => $request->phone,
		  'id_num' => $request->id_num,
		  'username' => $request->Username,
		  'password' => $request->password,
			]);
		return redirect()->back()->withErrors(['msg' => 'Berhasil, Kontrak Sewa Ditambahkan.']);
    }
	
	  public function create()
	  {
		return view('home');
	  }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
