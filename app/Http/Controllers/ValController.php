<?php

namespace App\Http\Controllers;

use  App\Http\Requests\CheckYear;
use Illuminate\Http\Request;


class ValController extends Controller
{
    public function check()
    {
    	return view('checknam');
    }
    public function validateyear(Request $request)
    {
    	echo $request->nam;
    }
    public function checknam(CheckYear $request)
    {
    	$nam=$request->nam;
    	   return redirect()->route('show')->with('thongbao',$nam.' la nam nhuan ');
    }
}
