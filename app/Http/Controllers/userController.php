<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    
    public function userindex()
    {
        return view('user.userindex');
    }

    
}
