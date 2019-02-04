<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sppjbservice;
use App\Anggotasppjbservice;

class AnggotasppjbsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $Sppjbs = sppjbservice::all()->toArray();
        $Sppjbs = sppjbservice::all();
        $anggotasppjbs = Anggotasppjbservice::all()->toArray();
        $anggotasppjbs = Anggotasppjbservice::all();
        return view('admin/sppjbs', compact('Sppjbs', 'anggotasppjbs'));
    }

     public function store(Request $request)
    {
        $anggotasppjbs = new Anggotasppjbservice;
        $anggotasppjbs->id_karyawan = $request->input('idkaryawan');
        $anggotasppjbs->nama_karyawan = $request->input('namakaryawan');
        $anggotasppjbs->jabatan = $request->input('jabatan');
        $anggotasppjbs->save();

        $Sppjbs = Anggotasppjbservice::all()->toArray();
        $Sppjbs = Anggotasppjbservice::all();
        $anggotasppjbs = Anggotasppjbservice::all()->toArray();
        $anggotasppjbs = Anggotasppjbservice::all();
        return view('admin/sppjbs', compact('Sppjbs', 'anggotasppjbs'));;
    }

    public function destroy($id)
    {
        $anggotasppjbs = Anggotasppjbservice::find($id);
        $anggotasppjbs->delete();
        return redirect('admin/sppjbs')->with('succes', 'Anggotasppjbservice has been delete');
    }

    public function edit($id)
    {
        $anggotasppjbs = Anggotasppjbservice::find($id);
        return view ('admin/sppjbs', compact('anggotasppjbs', 'id'));
    }

    public function update(Request $request)
    {
      $anggotasppjbs = \DB::table('anggotasppjbservices')->select('id')->where('id', $request->input('id'));
      $anggotasppjbs->update(['id_karyawan' => $request->input('idkaryawan')]);
      $anggotasppjbs->update(['nama_karyawan' => $request->input('namakaryawan')]);
      $anggotasppjbs->update(['jabatan' => $request->input('jabatan')]);
      return back()->with('success', 'Profil Berhasil Diubah');
    }

    public function show()
    {
        $Sppjbs = Anggotasppjbservice::all()->toArray();
        $Sppjbs = Anggotasppjbservice::all();
        $anggotasppjbs = Anggotasppjbservice::all()->toArray();
        $anggotasppjbs = Anggotasppjbservice::all();
        return view('admin/sppjbs', compact('Sppjbs', 'anggotasppjbs'));
    }
}
