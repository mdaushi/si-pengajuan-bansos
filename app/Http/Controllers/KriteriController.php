<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriController extends Controller
{
    // admin
    public function index()
    {
        $datas = Kriteria::all();
        return view('pages.admin.kriteria.index', compact('datas'));
    }

    public function store(Request $request)
    {
        $input = $request->all();

        try {
            Kriteria::create($input);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }

        return redirect()->back()->with('success', 'Berhasil tambah Kriteria');
    }

    public function update($id, Request $request)
    {
        $input = $request->all();

        try {
            Kriteria::find($id)->update($input);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }

        return redirect()->back()->with('success', 'Berhasil edit Kriteria');
    }

    public function delete($id)
    {
        try {
            Kriteria::find($id)->delete();
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }

        return redirect()->back()->with('success', 'Berhasil hapus Kriteria');
    }
}
