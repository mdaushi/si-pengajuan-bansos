<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MasyarakatController extends Controller
{
    public function index(Request $request)
    {
        $data = Masyarakat::where('user_id', Auth::user()->id)->first();
        $email = User::find(Auth::user()->id)->email;
        return view("pages.masyarakat.index", compact('data', 'email'));
    }

    public function update(Request $request)
    {
        $input = $request->except('email');

        DB::beginTransaction();
        try {
            Masyarakat::updateOrCreate(['user_id' => Auth::user()->id], $input);

            User::where('id', Auth::user()->id)->first()->update(['email' => $request->email]);

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with('error', $th->getMessage());
        }
        return redirect()->back()->with('success', 'Data diri berhasil diupdate!');
    }
}
