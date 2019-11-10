<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class handinhand extends Controller
{
    public function index(){
    	$data['number']  = User::count();
    	return view('welcome')->with($data);
    }

    public function members(){
    	$data['members'] = User::all();
    	return view('community')->with($data);
    }
} 
