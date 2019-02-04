<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lk3;
use App\Anggotalk3;

class Anggotalk3Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $Lk3 = lk3::all()->toArray();
        $Lk3 = lk3::all();
        $anggotalk3 = Anggotalk3::all()->toArray();
        $anggotalk3 = Anggotalk3::all();
        return view('admin/lk3', compact('Lk3', 'anggotalk3'));
    }

     public function store(Request $request)
    {
        $anggotalk3 = new Anggotalk3;
        $anggotalk3->id_karyawan = $request->input('idkaryawan');
        $anggotalk3->nama_karyawan = $request->input('namakaryawan');
        $anggotalk3->jabatan = $request->input('jabatan');
        $anggotalk3->save();

        $Lk3 = lk3::all()->toArray();
        $Lk3 = lk3::all();
        $anggotalk3 = Anggotalk3::all()->toArray();
        $anggotalk3 = Anggotalk3::all();
        return view('admin/lk3', compact('Lk3', 'anggotalk3'));;
    }

    public function destroy($id)
    {
        $anggotalk3 = Anggotalk3::find($id);
        $anggotalk3->delete();
        return redirect('admin/lk3')->with('succes', 'lk3 has been delete');
    }

    public function edit($id)
    {
        $anggotalk3 = Anggotalk3::find($id);
        return view ('admin/lk3', compact('anggotalk3', 'id'));
    }

    public function update(Request $request)
    {
      $anggotalk3 = \DB::table('anggotalk3s')->select('id')->where('id', $request->input('id'));
      $anggotalk3->update(['id_karyawan' => $request->input('idkaryawan')]);
      $anggotalk3->update(['nama_karyawan' => $request->input('namakaryawan')]);
      $anggotalk3->update(['jabatan' => $request->input('jabatan')]);
      return back()->with('success', 'Profil Berhasil Diubah');
    }

    public function show()
    {
        $Lk3 = lk3::all()->toArray();
        $Lk3 = lk3::all();
        $anggotalk3 = Anggotalk3::all()->toArray();
        $anggotalk3 = Anggotalk3::all();
        return view('admin/lk3', compact('Lk3', 'anggotalk3'));
    }
}
