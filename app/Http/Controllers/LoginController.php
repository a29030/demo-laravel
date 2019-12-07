<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\user;

class LoginController extends Controller
{
    public function login(Request $Request)
    {
    	// echo $Request['taikhoan']."<br>";
     //    echo $Request['matkhau'];
		
    	$taikhoan = $Request['taikhoan'];
        $matkhau = $Request['matkhau'];

        if (Auth::attempt(['email'=>$taikhoan ,'password'=>$matkhau])){
        	echo "thanh cong";
        	die();
        }
     //    $user=user::where('name','=',$taikhoan)->where('password','=',$matkhau)->get();
     //    $tk="";
     //    $mk="";
     //    foreach ($user as $value) {
     //    	$tk=$value->name;
     //    	$mk=$value->password;
	    // }
	        // var_dump($user);
			// echo $user[0]['email'];
			// echo $user[0]['name'];
	        //  {
	        // if ($tk!="" && $mk != "") {
	        // 	return view('trangchu');
	        // }else{
	        	
	        // 	return view('login');
	        // }
    }
    public function dangnhap()
    {
    	return view('login');
    }
    public function dangky()
    {
    	return view('dangky');
    }

}
