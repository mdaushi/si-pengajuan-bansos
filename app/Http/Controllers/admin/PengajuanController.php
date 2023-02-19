<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Kriteria;
use App\Models\Pengajuan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function index()
    {
        $kriteria = Kriteria::all();
        $datas = Pengajuan::with('masyarakat')->where('status', 'proses')->get();
        $datas->map(function($data) use(&$kriteria){
            $analisis = [];
            if($data->masyarakat->kewarganegaraan == 'WNI') {
                $analisis['kewarganegaraan'] = true;
            }
            if($data->masyarakat->pekerjaan == 'nonasn') {
                $analisis['pekerjaan'] = true; 
            }
            if($data->masyarakat->pendapatan == 'kurang') {
                $analisis['pendapatan'] = true;
            }

            if(Carbon::parse($data->masyarakat->tanggal_lahir)->age > 60){
                $analisis['umur'] = true;
                
            }
            $data->analisis = $analisis;
        });
        $datas = $datas->sortBy('penghasilan')->values()->all();
        return view('pages.admin.pengajuan.index', compact('datas', 'kriteria'));
    }

    public function aksi($id, Request $request)
    {
        $kriteria = Kriteria::all();
        $aksi = $request->aksi;
        $analisis = $request->analisis;
        $alasan = collect();
        if($aksi == 'tolak') {
            foreach ($kriteria as $kr) {
                if(!isset($analisis[$kr->key])){
                    $alasan->push($kr->key);
                }
            }
        }

        try {
            Pengajuan::where('id', $id)->first()->update(['status' => $aksi, 'ket' => $alasan]);
            
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }

        return redirect()->back()->with($aksi == 'terima' ? 'success' : ($aksi == 'proses' ? 'success' : 'error'), 'Pengajuan di' . $aksi .'!');
    }

    public function penerima()
    {
        $datas = Pengajuan::where('status', 'terima')->get();
        return view('pages.admin.penerima.index', compact('datas'));
    }

    public function tertolak()
    {
        $datas = Pengajuan::where('status', 'tolak')->get();
        return view('pages.admin.tertolak.index', compact('datas'));
    }
}
