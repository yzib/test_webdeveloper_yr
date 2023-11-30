<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\user_car;
use App\Models\User;

class user extends Controller
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
        return view('user/login', $data);
    }

    public function login_action(Request $request)
    {
         $credentials = $request->validate([
            'sys_uname' => 'required',
            'sys_pass' => 'required',
        ]);
		
        if (!Auth::attempt($credentials)) {
			$request->session()->regenerate();
            return redirect()->route('/')->withSuccess('You have successfully logged in!');
			echo $credentials['sys_uname'];
        }

        return back()->withErrors([
            'password' => 'Wrong username or password',
        ]);
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
		return view('user.index', compact('indexing'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // yrib. test
		$request->validate([
		  'name_loaner' => 'required|max:64',
		  'addr' => 'required|max:255',
		  'phone' => 'required|max:16',
		  'id_num' => 'required|max:16',
		  'sys_uname' => 'required|max:18|min:8',
		  'sys_pass' => 'required|max:16|min:8',
		  'id_num' => 'required|max:16'
		]);
		user::create($request->all());
		return redirect()->route('home') ->with('Berhasil','User Ditambahkan.');
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
