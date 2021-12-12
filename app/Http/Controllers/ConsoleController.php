<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConsoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function consolehome()
    {
        
        return view('console_box.menu_cb')->with('success','Data Peserta Non BPJS Berhasil Terdaftar');
    }
    public function admisi_poli()
    {
        $tanggal = gmdate("Y-m-d", time() + 60 * 60 * 7);
             $sumantrianadmisi = DB::select(DB::raw("SELECT count('id') as `jumlah` FROM `tbl_antrian` WHERE tanggal='$tanggal'"));
             $tambahantrian = DB::table('tbl_antrian')->get();
                                  
                                     $tanggal = gmdate("Y-m-d", time() + 60 * 60 * 7);
                                
                                     $getnoantrian = DB::table('tbl_antrian')->max('no_antrian');
                                    //  $insert = DB::table('tbl_antrian')->insert([
                                    //     'tanggal' => $tanggal,
                                    //     // 'loket' =>$getloket->numberBetween(1, 3),
                                    //     'no_antrian' => $getnoantrian+1,
                                    //     ]);
    $sisaantrianadmisi = DB::select(DB::raw("SELECT max('no_antrian') as `max` FROM `tbl_antrian` WHERE tanggal='$tanggal'"));

                                    if( $sisaantrianadmisi = 0){
                                        $sisaantrian = $sisaantrianadmisi;
                                    }
                                    else if ($sisaantrianadmisi > 0){
                                        $sisaantrian = $sisaantrianadmisi-1;  
                                    }
                                     else{
                                        $sisaantrian = 0; 
                                     }
                                    //     'no_antrian' => $getnoantrian+1,
                                    //     ]);
         // dd( $sisaantrian);
         return view('console_box/admisi_poli/admisi_poli',[
             'sumantrianadmisi' => $sumantrianadmisi,
             'tambahantrian' => $tambahantrian,
             'sisaantrian' => $sisaantrian,
         ])->with('success','Data Peserta Non BPJS Berhasil Terdaftar'); 
       // return view('console_box.admisi_poli.admisi_poli')->with('success','Data Peserta Non BPJS Berhasil Terdaftar');
    }
    public function consolemenubpjs()
    {
        $poli =DB::table('tbpoli')->get();
        $mddokter = DB::table('tabel_dokter')->get();
    
        return view('console_box.bpjs.menu_bpjs',[
            'mdpoli' => $poli,
        	'mddokter' => $mddokter,
        	
        ]);
    }
    public function consolemenunonbpjs()
    {
        $poli =DB::table('tbpoli')->get();
        $mddokter = DB::table('tabel_dokter')->get();
    
        return view('console_box.non_bpjs.menu_nonbpjs',[
            'mdpoli' => $poli,
        	'mddokter' => $mddokter,
        	
        ]);
    }
    public function daftarpasienbpjs(Request $request)
    {
            //  \DB::connection()->enableQueryLog();
         $try =   DB::table('peserta_bpjs')->insert([
            'nik_kartubpjs' => $request->nik_kartubpjs,
            'poli'=> $request->poli,
            'dokter'=> $request->dokter,
                    
        ]);
        //  $TRY = $request->all();
        // $queries = \DB::getQueryLog();
        // return dd($queries);
        return redirect('/home')->with('success','Data Peserta  BPJS Berhasil Terdaftar');
        }
    
        public function daftarpasiennonbpjs(Request $request)
        {
                //  \DB::connection()->enableQueryLog();
             $try =   DB::table('peserta_nonbpjs')->insert([
                'option' => $request->option,
                'nik_norm' => $request->nik_norm,
                'poli'=> $request->poli,
                'dokter'=> $request->dokter,
                        
            ]);
            //  $TRY = $request->all();
            // $queries = \DB::getQueryLog();
            // return dd($queries);
            return redirect('/home')->with('success','Data Peserta Non BPJS Berhasil Terdaftar');
            }
        public function pesertalama()
        {
              
             return view('console_box.menu_cb_pesertalama')->with('success','Data Peserta Non BPJS Berhasil Terdaftar');
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