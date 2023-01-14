<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengaduanController extends Controller
{
    public function index()
    {
        return view("pages.pengaduan.index");
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $user = Masyarakat::where('user_id', Auth::user()->id)->first();
        $input['masyarakat_id'] = $user->id;

        try {
            Pengaduan::create($input);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }

        return redirect()->back()->with('success', 'Aduan berhasil dikirim');
    }
}
