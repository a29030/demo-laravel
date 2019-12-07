<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function login(Request $Request)
    {
        echo $Request['taikhoan']."<br>";
        echo $Request['matkhau'];

    }
}

