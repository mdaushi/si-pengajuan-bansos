<?php

namespace App\Http\Controllers\admin;

use Carbon\Carbon;
use App\Models\Kriteria;
use App\Models\Pengajuan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
// use Barryvdh\DomPDF\Facade\Pdf;


class PengajuanController extends Controller
{
    public function getDatas()
    {
        $kriteria = Kriteria::all();
        $datas = Pengajuan::with('masyarakat')->where('status', 'proses')->get();
        $datas->map(function($data) use($kriteria){
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
        return [
            'datas'  => $datas,
            'kriteria' => $kriteria
        ];
    }

    public function index()
    {
        $datas = $this->getDatas()['datas'];
        $kriteria = $this->getDatas()['kriteria'];
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

    public function exports(Request $request)
    {
        $type = $request->type;
        
        switch ($type) {
            case 'pengajuan':
                $datas = $this->getDatas()['datas'];
                $heading = 'Calon Penerima Bantuan';
                break;
            case 'penerima':
                    $heading = 'Penerima Bantuan';
                    $datas = Pengajuan::where('status', 'terima')->get();
                    break;
            case 'tertolak':
                $heading = 'Pengajuan Tertolak';
                $datas = Pengajuan::where('status', 'tolak')->get();
                break;
            case 'person':
                    $heading = 'Data Diri Pengaju';
                    $datas = Pengajuan::where('id', $request->id)->get();
                    $pdf = Pdf::loadView('pdf.person', ['datas' => $datas, 'heading' => $heading]);
                    return $pdf->stream();
                    break;
            default:
                $heading = '....';
                break;
        }
        $pdf = Pdf::loadView('pdf.lists', ['datas' => $datas, 'heading' => $heading]);
        return $pdf->stream();
    }

}
