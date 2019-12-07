<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    function diem(Request $Request){
	if($Request->get('diem'))

		echo "da co diem: ". $Request->get('diem');
	}
	function nhapdiem(){
		return view('nhapdiem');
	}
}
