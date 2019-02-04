<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sppjb;
use App\Anggotasppjb;

class AnggotasppjbController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $Sppjb = sppjb::all()->toArray();
        $Sppjb = sppjb::all();
        $anggotasppjb = Anggotasppjb::all()->toArray();
        $anggotasppjb = Anggotasppjb::all();
        return view('admin/sppjb', compact('Sppjb', 'anggotasppjb'));
    }

      public function store(Request $request)
    {
        $anggotasppjb = new Anggotasppjb;
        $anggotasppjb->id_karyawan = $request->input('idkaryawan');
        $anggotasppjb->nama_karyawan = $request->input('namakaryawan');
        $anggotasppjb->jabatan = $request->input('jabatan');
        $anggotasppjb->save();

        $Sppjb = sppjb::all()->toArray();
        $Sppjb = sppjb::all();
        $anggotasppjb = Anggotasppjb::all()->toArray();
        $anggotasppjb = Anggotasppjb::all();
        return view('admin/sppjb', compact('Sppjb', 'anggotasppjb'));;
    }

    public function destroy($id)
    {
        $anggotasppjb = Anggotasppjb::find($id);
        $anggotasppjb->delete();
        return redirect('admin/sppjb')->with('succes', 'sppjb has been delete');
    }

    public function edit($id)
    {
        $anggotasppjb = Anggotasppjb::find($id);
        return view ('admin/sppjb', compact('anggotasppjb', 'id'));
    }

    public function update(Request $request)
    {
      $anggotasppjb = \DB::table('anggotasppjbs')->select('id')->where('id', $request->input('id'));
      $anggotasppjb->update(['id_karyawan' => $request->input('idkaryawan')]);
      $anggotasppjb->update(['nama_karyawan' => $request->input('namakaryawan')]);
      $anggotasppjb->update(['jabatan' => $request->input('jabatan')]);
      return back()->with('success', 'Profil Berhasil Diubah');
    }

    public function show()
    {
        $Sppjb = sppjb::all()->toArray();
        $Sppjb = sppjb::all();
        $anggotasppjb = Anggotasppjb::all()->toArray();
        $anggotasppjb = Anggotasppjb::all();
        return view('admin/sppjb', compact('Sppjb', 'anggotasppjb'));
    }
}