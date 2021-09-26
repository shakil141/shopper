<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class AdminController extends Controller
{
    public function homepage()
    {
        return view('backend.dashborad');
    }



}
