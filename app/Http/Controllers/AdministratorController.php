<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    public function administratorhome()
    {
        return view('administrator.admin_dashboard');
    }
    public function administratorvideo()
    {
        return view('administrator.admin_video');
    }
}