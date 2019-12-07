<?php

namespace App\Http\Controllers\Api;
    
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class APIcontroller extends Controller
{
    
    public function view()
    {
        return view('login');
    }
}
