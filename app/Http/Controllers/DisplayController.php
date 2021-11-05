<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DisplayController extends Controller
{
    public function index()
    {
        $poli =DB::table('tbpoli')->get();
        $mddokter = DB::table('tbdaftardokter')->get();
        return view('display.display_index', [
            'mdpoli' => $poli,
            'mddokter' => $mddokter,
            
        ]);
    }
}