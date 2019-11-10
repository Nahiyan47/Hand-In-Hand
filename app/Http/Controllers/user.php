<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User as data;
use DB;

class user extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function view($id){
        $data = data::find($id);
        return view('user.visitprofile')->with('data',$data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */ 
    public function show($id)
    {
        $category= DB::table('skill_category')
         ->where('sub_id', 0)
         ->get();

        return view('user.profile')->with('category',$category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
        $file = $request->file('photo');
        $destinationPath = 'img';
        $file->move($destinationPath,$file->getClientOriginalName());

        $user = data::find($id);

        $user->prefered_area = $request->prefered_area;
        $user->address = $request->address;
        $user->description = $request->description;
        $user->mobile = $request->mobile;
        $user->skype = $request->skype;
        $user->photo = $file->getClientOriginalName(); 
        $user->save();
   
      //Move Uploaded File
 
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
