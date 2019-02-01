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
    	$Bakorsiroh = bakorsiroh::all()->toArray();
        $Bakorsiroh = bakorsiroh::all();
        $Anggotabakorsiroh = anggotabakorsiroh::all()->toArray();
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

        $Bakorsiroh = bakorsiroh::all()->toArray();
        $Bakorsiroh = bakorsiroh::all();
        $Anggotabakorsiroh = anggotabakorsiroh::all()->toArray();
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

    public function update(Request $request, $id)
    {
        $Anggotabakorsiroh = anggotabakorsiroh::find($id);
        $this->validate(request(), [
            'id_karyawan' => 'required',
            'nama_karyawan' => 'required',
            'jabatan' => 'required'

        ]);

        $Anggotabakorsiroh->id_karyawan =  $request->get('idkaryawan');
        $Anggotabakorsiroh->nama_karyawan = $request->get('namakaryawan');
        $Anggotabakorsiroh->jabatan = $request->get('jabatan');
        $Anggotabakorsiroh->save();
        return redirect('admin/bakorsiroh')->with('succes', 'Anggota has been Update');
    }
}
