<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Hash;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function register()
    {

      return view('auth.register');
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('home');
    }

    public function login()
    {

      return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('home');
        }

        return redirect('login')->with('error', 'Oppes! You have entered invalid credentials');
    }

    public function logout() {
      Auth::logout();

      return redirect('login');
    }

    public function home()
    {
        $peserta_bpjs = DB::table('peserta_bpjs')->get();
        $peserta_nonbpjs = DB::table('peserta_nonbpjs')->get();
        $poli =DB::table('tbpoli')->get();
        $mddokter = DB::table('tabel_dokter')->get();
        $petugas_panggil = DB::table('petugas_panggil')->get();
        $loket = DB::table('master_loket')->select('master_loket.nama')->get();
        $aktor = DB::table('master_aktor')->get();
        $selectedLoket = DB::table('master_loket')->first()->nama;
        //dd($selectedLoket);
      return view('home',[
        'mdpoli' => $poli,
        'mddokter' => $mddokter,
        'selectedLoket' => $selectedLoket,
        'peserta_bpjs' => $peserta_bpjs,
        'peserta_nonbpjs' => $peserta_nonbpjs,
        'petugas_panggil' => $petugas_panggil,
        'petugas' => $aktor,
        'loket' => $loket,
    ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}