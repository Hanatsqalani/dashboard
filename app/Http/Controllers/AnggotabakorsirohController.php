<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bakorsiroh;
use App\anggotabakorsiroh;

class AnggotabakorsirohController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $Bakorsiroh = bakorsiroh::all();
        $Anggotabakorsiroh = anggotabakorsiroh::all();
    	return view('admin/bakorsiroh', compact('Bakorsiroh', 'Anggotabakorsiroh'));
    }

     public function store(Request $request)
    {
        $Anggotabakorsiroh = new anggotabakorsiroh;
        $Anggotabakorsiroh->id_karyawan = $request->input('idkaryawan');
        $Anggotabakorsiroh->nama_karyawan = $request->input('namakaryawan');
        $Anggotabakorsiroh->jabatan = $request->input('jabatan');
        $Anggotabakorsiroh->save();

        $Bakorsiroh = bakorsiroh::all();
        $Anggotabakorsiroh = anggotabakorsiroh::all();
        return view('admin/bakorsiroh', compact('Bakorsiroh', 'Anggotabakorsiroh'));;
    }

    public function destroy($id)
    {
        $Anggotabakorsiroh = anggotabakorsiroh::find($id);
        $Anggotabakorsiroh->delete();
        return redirect('admin/bakorsiroh')->with('succes', 'Bakorsiroh has been delete');
    }

    public function edit($id)
    {
        $Anggotabakorsiroh = anggotabakorsiroh::find($id);
        return view ('admin/bakorsiroh', compact('Anggotabakorsiroh', 'id'));
    }

    public function update(Request $request)
    {
      $Anggotabakorsiroh = \DB::table('anggotabakorsirohs')->select('id')->where('id', $request->input('id'));
      $Anggotabakorsiroh->update(['id_karyawan' => $request->input('idkaryawan')]);
      $Anggotabakorsiroh->update(['nama_karyawan' => $request->input('namakaryawan')]);
      $Anggotabakorsiroh->update(['jabatan' => $request->input('jabatan')]);
      return back()->with('success', 'Profil Berhasil Diubah');
    }

    public function show()
    {
        $Bakorsiroh = bakorsiroh::all()->toArray();
        $Bakorsiroh = bakorsiroh::all();
        $Anggotabakorsiroh = anggotabakorsiroh::all()->toArray();
        $Anggotabakorsiroh = anggotabakorsiroh::all();
        return view('admin/bakorsiroh', compact('Bakorsiroh', 'Anggotabakorsiroh'));
    }
}
