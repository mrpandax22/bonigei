<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagecontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function admin_addal(){
        return view('admin.addalumno');
    }
}
