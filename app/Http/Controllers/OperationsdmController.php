<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sdm;
use App\Operation;

class OperationsdmController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $Sdm = sdm::all()->toArray();
        $Sdm = sdm::all();
        $operation = Operation::all()->toArray();
        $operation = Operation::all();
        return view('admin/operationsdm', compact('Sdm', 'operation'));
    }

     public function store(Request $request)
    {
        $Sdm = new sdm;
        $Sdm->bidang = $request->input('bidang');
        $Sdm->jabatan = $request->input('jabatan');
        $Sdm->save();

        $Sdm = sdm::all()->toArray();
        $Sdm = sdm::all();
        $operation = Operation::all()->toArray();
        $operation = Operation::all();
        return view('admin/operationsdm', compact('Sdm', 'operation'));
    }

   /* public function destroy($id)
    {
        $anggotapik = Anggotapik::find($id);
        $anggotapik->delete();
        return redirect('admin/pik')->with('succes', 'pik has been delete');
    }

    public function edit($id)
    {
        $anggotapik = Anggotapik::find($id);
        return view ('admin/pik', compact('anggotapik', 'id'));
    }

    public function update(Request $request)
    {
      $anggotapik = \DB::table('anggotapiks')->select('id')->where('id', $request->input('id'));
      $anggotapik->update(['id_karyawan' => $request->input('idkaryawan')]);
      $anggotapik->update(['nama_karyawan' => $request->input('namakaryawan')]);
      $anggotapik->update(['jabatan' => $request->input('jabatan')]);
      return back()->with('success', 'Profil Berhasil Diubah');
    }

    public function show()
    {
        $Pik = pik::all()->toArray();
        $Pik = pik::all();
        $anggotapik = Anggotapik::all()->toArray();
        $anggotapik = Anggotapik::all();
        return view('admin/pik', compact('Pik', 'Anggotabakorsiroh'));
    }*/
}
