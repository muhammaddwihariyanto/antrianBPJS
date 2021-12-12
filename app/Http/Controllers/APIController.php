<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class APIController extends Controller
{
    public function poli()
    {
        $data = DB::table('tbpoli')->select('NamaPoli', 'KodePoli', 'TipePoli', 'Spesialis')->get();
        return response([
            'metaData' => ['code' => '1', 'message' => 'OK'],
            'response' => [
                'list' => $data
            ]
        ], 200);
    }
    public function dokter()
    {
        $data = DB::table('tabel_dokter')->select('kode', 'nama')->get();
        return response([
            'metaData' => ['code' => '1', 'message' => 'OK'],
            'response' => [
                'list' => $data
            ]
        ], 200);
    }
    public function jadwalDokter($parameter1, $parameter2)
    {
        $data = DB::table('jadwaldokter')->where('kodepoli', 'like', '%' . $parameter1 . '%')
            ->where('tanggal', 'like', '%' . $parameter2 . '%')->get();
        return response([
            'metaData' => ['code' => '1', 'message' => 'OK'],
            'response' => [
                'list' => $data
            ]
        ], 200);
    }
    public function updateJadwalDokter(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->input();
            $jadwal = $data['jadwal'];
            $test = DB::table('jadwaldokter')->where('kodepoli', $data['kodepoli'])->update([
                'hari' => $jadwal[0]['hari'],
                'buka' => $jadwal[0]['buka'],
                'tutup' => $jadwal[0]['tutup']
            ]);
            if ($test) {
                return response([
                    'metaData' => ['message' => 'OK', 'code' => '200'],
                ], 200);
            }
        }
    }
    public function tambahAntrean(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->input();
            $test = DB::table('antrean')->insert([
                'kodebooking' => $data['kodebooking'],
                'jenispasien' => $data['jenispasien'],
                'nomorkartu' => $data['nomorkartu'],
                'nik' => $data['nik'],
                'nohp' => $data['nohp'],
                'kodepoli' => $data['kodepoli'],
                'namapoli' => $data['namapoli'],
                'pasienbaru' => $data['pasienbaru'],
                'norm' => $data['norm'],
                'tanggalperiksa' => $data['tanggalperiksa'],
                'kodedokter' => $data['kodedokter'],
                'namadokter' => $data['namadokter'],
                'jampraktek' => $data['jampraktek'],
                'jeniskunjungan' => $data['jeniskunjungan'],
                'nomorreferensi' => $data['nomorreferensi'],
                'nomorantrean' => $data['nomorantrean'],
                'angkaantrean' => $data['angkaantrean'],
                'estimasidilayani' => $data['estimasidilayani'],
                'sisakuotajkn' => $data['sisakuotajkn'],
                'kuotajkn' => $data['kuotajkn'],
                'sisakuotanonjkn' => $data['sisakuotanonjkn'],
                'kuotanonjkn' => $data['kuotanonjkn'],
                'keterangan' => $data['keterangan']
            ]);
            return response([
                'metaData' => ['message' => 'OK', 'code' => '200']
            ], 200);
        }
    }
    public function updateWaktu(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->input();
            $test = DB::table('antrean')->where('kodebooking', $data['kodebooking'])->update([
                'taskid' => $data['taskid'],
                'waktu' => $data['waktu']
            ]);
            if ($test) {
                return response([
                    'metaData' => ['message' => 'OK', 'code' => '200'],
                ], 200);
            }
        }
    }
    public function batalWaktu(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->input();
            $test = DB::table('antrean')->where('kodebooking', $data['kodebooking'])->update([
                'keterangan' => $data['keterangan'],
                'deleted_at' => Carbon::now()
            ]);
            if ($test) {
                return response([
                    'metaData' => ['message' => 'OK', 'code' => '200'],
                ], 200);
            }
        }
    }
    public function getListTask(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->input();
            $test = DB::table('antrean')->where('kodebooking', $data['kodebooking'])
                ->select('wakturs', 'waktu', 'taskname', 'taskid', 'kodebooking')->get();
            if ($test) {
                return response([
                    'response' => [
                        'list'
                        =>
                        $test
                    ],
                    'metaData' => ['message' => 'OK', 'code' => '200'],
                ], 200);
            }
        }
    }
    public function Dashboard($parameter1, $parameter2)
    {
        $data = DB::table('waktutunggu')->where('tanggal', 'like', '%' . $parameter1 . '%')
            ->orWhere('waktu_task1', 'like', '%' . $parameter2 . '%')->get();
        return response([
            'metaData' => ['code' => '200', 'message' => 'OK'],
            'response' => [
                'list' => $data
            ]
        ], 200);
    }
    public function DashboardBulan($parameter1, $parameter2, $parameter3)
    {
        $data = DB::table('waktutunggu')->where(\DB::raw('substr(tanggal, 6, 2)'), 'like', '%' . $parameter1 . '%')
            ->orWhere(\DB::raw('substr(tanggal, -10, 4)'), 'like', '%' . $parameter2 . '%')
            ->orWhere('waktu_task1', 'like', '%' . $parameter3 . '%')
            ->get();
        return response([
            'metaData' => ['code' => '200', 'message' => 'OK'],
            'response' => [
                'list' => $data
            ]
        ], 200);
    }
}
