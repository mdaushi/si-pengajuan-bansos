<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Models\Pengajuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PengajuanController extends Controller
{
    public function index()
    {
        $existsUser = Masyarakat::where('user_id', Auth::user()->id)->first();
        if(!$existsUser){
            return view("pages.pengajuan.index", ['data' => 'user']);
        }

        
        $existsPengajuan = Pengajuan::where('masyarakat_id', $existsUser->id)->first();
        if($existsPengajuan){
            return view("pages.pengajuan.index", ['data' => 'pengajuan']);
        }
        
        $existsKK = Pengajuan::whereRelation('masyarakat','no_kk', $existsUser->no_kk)->first();
        if($existsKK){
            return view("pages.pengajuan.index", ['data' => 'double']);
        }
        return view("pages.pengajuan.create");
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $input['status'] = 'proses';
        $userData = Masyarakat::where("user_id", Auth::user()->id)->first();
        $input['masyarakat_id'] = $userData->id;

        DB::beginTransaction();
        try {

            Pengajuan::create($input);

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with('error', $th->getMessage());
        }
        return redirect()->back()->with('success', 'Pengajuan Berhasil!');
    }

    public function check()
    {
        $user = Masyarakat::where('user_id', Auth::user()->id)->first();
        $pengajuan = Pengajuan::where('masyarakat_id', $user->id ?? null)->first();
        $pengajuan->ket = json_decode($pengajuan->ket);
        return view("pages.pengajuan.status", compact('pengajuan'));
    }
}
