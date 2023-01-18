<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Pengajuan;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function index()
    {
        $datas = Pengajuan::where('status', 'proses')->get();
        return view('pages.admin.pengajuan.index', compact('datas'));
    }

    public function aksi($id, Request $request)
    {
        $aksi = $request->aksi;
        try {
            Pengajuan::where('id', $id)->first()->update(['status' => $aksi]);
            
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
