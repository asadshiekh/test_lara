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
            "name"=>$email,
            "email"=>$name
        );

        DB::table('users')->insert($userdata);
         return redirect('/home');
    }
}
