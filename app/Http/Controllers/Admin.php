<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class Admin extends Controller
{
    public function home(){

    	return view('home');
    }

    public function insert(Request $request){

    	$name = $request->get('name');
    	$email = $request->get('email');

    	$userdata=array(
            "name"=>$name,
            "email"=>$email
        );

        DB::table('users')->insert($userdata);
         return redirect('/home');
    }
    public function view(){
        $data=DB::table('users')->get();
        return view('google',['data'=>$data]);
        //print_r($data);
    }
}
