<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class PetugasPanggilController extends Controller
{
    public function index($loket)
    {
        //  dd($loket);
        $tanggal = gmdate("Y-m-d", time() + 60 * 60 * 7);

        $peserta_bpjs = DB::table('peserta_bpjs')->get();
        $peserta_nonbpjs = DB::table('peserta_nonbpjs')->get();
        $poli = DB::table('tbpoli')->get();
        $mddokter = DB::table('tabel_dokter')->get();
        $petugas_panggil = DB::table('petugas_panggil')->get();



        $antrian = DB::table('tbl_antrian')
                    ->where('status', '0')
                    ->where('tanggal', $tanggal)
                    // ->orderBy('waktu_selesai')
                    ->first()->no_antrian;
                   
// echo "Berhasil";
                   
        //dd( $antrian);
        //   \DB::connection()->enableQueryLog();
    
        $tanggal = gmdate("Y-m-d", time() + 60 * 60 * 7);
            $tambahantrian = DB::table('tbl_antrian')
        ->where('tanggal', $tanggal)
        ->get();
        $antrianadmisi = DB::select(DB::raw("SELECT id, no_antrian, status FROM tbl_antrian 
        WHERE tanggal='$tanggal'"));

        $sumantrianadmisi = DB::select(DB::raw("SELECT count('id') as `jumlah` FROM `tbl_antrian` WHERE tanggal='$tanggal' AND status = '0'"));
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
      
        // $getnoantrian = DB::table('tbl_antrian')->min('no_antrian');
         //dd($antrian); 
        return view('petugaspanggil.pp_index', [
            'antrian' => $antrian,
            'mdpoli' => $poli,
            //'petugas' => $petugas,
            'antrianadmisi' => $antrianadmisi,
            'tambahantrian' => $tambahantrian,
            'sumantrianadmisi' => $sumantrianadmisi,
            'sisaantrian' => $sisaantrian,
            'petugas_panggil' => $petugas_panggil,
            'mddokter' => $mddokter,
            'peserta_bpjs' => $peserta_bpjs,
            'peserta_nonbpjs' => $peserta_nonbpjs,
            'loket' => $loket,
            'tanggal' => $tanggal,
        ]);
    }
    public function daftarantrianadmisi()
    {
       
            $tanggal = gmdate("Y-m-d", time() + 60 * 60 * 7);
            // $getnoantrian = DB::table('tbl_antrian')->max('no_antrian');
            $getnoantrianyesterday = DB::table('tbl_antrian')->max('no_antrian');

            $getnoantrian = DB::table('tbl_antrian')
                            ->where('tanggal',  $tanggal )
                            ->max('no_antrian');
            $getloket = DB::table('tbl_antrian')->where('loket')->get();
            $resetantrian =  $getnoantrianyesterday -  $getnoantrianyesterday;
        
        // $sumantrianadmisi = DB::select(DB::raw("SELECT count('id') as `jumlah` FROM `tbl_antrian` WHERE tanggal='$tanggal'"));
        $tambahantrian = DB::table('tbl_antrian')->get();
            $insert = DB::table('tbl_antrian')->insert([
                'tanggal' => $tanggal,
                // 'loket' =>$getloket->numberBetween(1, 3),
                'no_antrian' => ($resetantrian+$getnoantrian)+1,
                ]);
          
            $getno = DB::table('tbl_antrian')->count('id');
                                   
         // dd( $getnoantrian);
       return redirect()->back()->with('success', 'data berhasil ditambahkan !');   
        
    }                      
    
    public function updatestatuswaktupanggil($noantrian)
    {
       // dd($loket);
       
        try {
        DB::table('tbl_antrian')
                        ->where('no_antrian',$noantrian)
                        ->update([
                           
                            'waktu_panggil' => now(),
                        ]);
return redirect()->route('index')->with('success','data telah berubah');
// echo "Berhasil";
                    }catch (\Exception $e) {
                         return redirect()->back()->with('error', 'nomor antrian sudah habis');
                      //  echo $e;
    }}
    public function updatestatus1($noantrian,$tanggal,$loket)
    {
       // dd($loket);
        $tanggal = gmdate("Y-m-d", time() + 60 * 60 * 7);
        try {
        DB::table('tbl_antrian')
                        ->where('no_antrian',$noantrian)
                        ->where('tanggal',$tanggal)
                        ->update([
                            'status' => 1,
                            'waktu_selesai' => now(),
                            'loket' => $loket,
                            'keterangan' => "Selesai Dilayani"
                        ]);
return redirect()->route('index')->with('success','data telah berubah');
// echo "Berhasil";
                    }catch (\Exception $e) {
                         return redirect()->back()->with('error', 'nomor antrian sudah habis');
                      //  echo $e;
    }}
    public function updatestatustidakhadir($noantrian,$tanggal,$loket)
    {
        // dd($noantrian);
        // $getnoantrian = DB::table('tbl_antrian')->min('no_antrian');
        $tanggal = gmdate("Y-m-d", time() + 60 * 60 * 7);

        try {  DB::table('tbl_antrian')
                        ->where('no_antrian',$noantrian)
                        ->where('tanggal',$tanggal)
                        ->update([
                            'status' => 2,
                            'waktu_selesai' => now(),
                            'loket' => $loket,
                            'keterangan' => "Tidak Hadir"
                        ]);
                        return redirect()->route('index')->with('success','data telah berubah');
    }catch (\Exception $e) {
        return redirect()->back()->with('error', 'nomor antrian sudah habis');
    }}
    public function updatestatuslewati($noantrian,$tanggal,$loket)
    {
        // dd($noantrian);
        // $getnoantrian = DB::table('tbl_antrian')->min('no_antrian');
        $tanggal = gmdate("Y-m-d", time() + 60 * 60 * 7);

        try {  DB::table('tbl_antrian')
                        ->where('no_antrian',$noantrian)
                        ->where('tanggal',$tanggal)
                        ->update([
                            'status' => 3,
                            'waktu_selesai' => now(),
                            'loket' => $loket,
                            'keterangan' => "Lewati"
                        ]);
                        return redirect()->route('index')->with('success','data telah berubah');
                    }catch (\Exception $e) {
                        return redirect()->back()->with('error', 'nomor antrian sudah habis');
                    }}
}