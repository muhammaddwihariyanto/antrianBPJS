<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetugasPanggilController extends Controller
{
    public function index()
    {
        $poli =DB::table('tbpoli')->get();
        $mddokter = DB::table('tbdaftardokter')->get();
        return view('petugaspanggil.pp_index', [
            'mdpoli' => $poli,
            'mddokter' => $mddokter,
            
        ]);
    }
}