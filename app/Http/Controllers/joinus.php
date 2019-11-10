<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Auth;
use \App\User;
use Auth as dir;

class joinus extends Controller
{
    public function __construct(){
    	$this->middleware('auth',['except' => ['index']]);
    }



    public function index(){
        if (dir::check()) {
            return redirect('dashboard');
        }else{
            return view('joinus');
        }

    }

    public function store(User $user){
    	 request()->validate([

    		'name' => ['required', 'string', 'max:255'],
    		'name' => ['required','max:255'],
    		'emails' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
    		'password' => ['required', 'string', 'min:6', 'confirmed'],
    	

    	]);
    	
    	$user->name = request('name');
    	$user->email = request('emails');
    	$user->mobile = request('mobile');
    	$user->usertype= 1;
    	$user->password = Hash::make(request('password'));

    	$user->save();

    	return redirect('/')->with('success','Registration complete. Login to join!');
    }

    public function login(){

    }

    public function dashboard(){
    	return view('user.dashboard');
	}
}
