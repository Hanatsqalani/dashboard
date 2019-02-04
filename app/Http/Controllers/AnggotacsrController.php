<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\csr;
use App\Anggotacsr;

class AnggotacsrController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $Csr = csr::all()->toArray();
        $Csr = csr::all();
        $anggotacsr = Anggotacsr::all()->toArray();
        $anggotacsr = Anggotacsr::all();
        return view('admin/csr', compact('Csr', 'anggotacsr'));
    }

      public function store(Request $request)
    {
        $anggotacsr = new Anggotacsr;
        $anggotacsr->id_karyawan = $request->input('idkaryawan');
        $anggotacsr->nama_karyawan = $request->input('namakaryawan');
        $anggotacsr->jabatan = $request->input('jabatan');
        $anggotacsr->save();

        $Csr = csr::all()->toArray();
        $Csr = csr::all();
        $anggotacsr = Anggotacsr::all()->toArray();
        $anggotacsr = Anggotacsr::all();
        return view('admin/csr', compact('Csr', 'anggotacsr'));;
    }

    public function destroy($id)
    {
        $anggotacsr = Anggotacsr::find($id);
        $anggotacsr->delete();
        return redirect('admin/csr')->with('succes', 'csr has been delete');
    }

    public function edit($id)
    {
        $anggotacsr = Anggotacsr::find($id);
        return view ('admin/csr', compact('anggotacsr', 'id'));
    }

    public function update(Request $request)
    {
      $anggotacsr = \DB::table('anggotacsrs')->select('id')->where('id', $request->input('id'));
      $anggotacsr->update(['id_karyawan' => $request->input('idkaryawan')]);
      $anggotacsr->update(['nama_karyawan' => $request->input('namakaryawan')]);
      $anggotacsr->update(['jabatan' => $request->input('jabatan')]);
      return back()->with('success', 'Profil Berhasil Diubah');
    }

    public function show()
    {
        $Csr = csr::all()->toArray();
        $Csr = csr::all();
        $anggotacsr = Anggotacsr::all()->toArray();
        $anggotacsr = Anggotacsr::all();
        return view('admin/csr', compact('Csr', 'anggotacsr'));
    }
}
