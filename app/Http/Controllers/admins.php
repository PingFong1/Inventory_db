<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admins extends Controller
{
    public function _construct()
    {
        $this->middleware('auth');
    }
}