<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function homepage()
    {
        return view('backend.dashborad');
    }

   
}
