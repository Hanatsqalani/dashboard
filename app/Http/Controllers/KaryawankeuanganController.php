<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Keuangan;
use App\photokeuangan;
use App\keuanganprestasi;

class KaryawankeuanganController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $keuangan = Keuangan::all()->toArray();
        $keuangan = Keuangan::all();
        $Photokeuangan = photokeuangan::all()->toArray();
        $Photokeuangan = photokeuangan::all();
        $Keuanganprestasi = keuanganprestasi::all()->toArray();
        $Keuanganprestasi = keuanganprestasi::all();
        return view('admin/keuangan', compact('keuangan', 'Photokeuangan', 'Keuanganprestasi'));
    }

    public function store(Request $request)
    {
        $keuangan = new Keuangan;
       
        $keuangan->id_karyawan = $request->input('idkaryawan');
        $keuangan->nama_karyawan = $request->input('namakaryawan');
        $keuangan->jabatan = $request->input('jabatan');
        $keuangan->save();

        $keuangan = Keuangan::all()->toArray();
        $keuangan = Keuangan::all();
        $Photokeuangan = photokeuangan::all()->toArray();
        $Photokeuangan = photokeuangan::all();
        $Keuanganprestasi = keuanganprestasi::all()->toArray();
        $Keuanganprestasi = keuanganprestasi::all();
        return view('admin/keuangan', compact('keuangan', 'Photokeuangan', 'Keuanganprestasi'));
    }

    public function destroy($id)
    {
        $keuangan = Keuangan::find($id);
        $keuangan->delete();
        return redirect('admin/keuangan')->with('succes', 'fotoengineering has been delete');
    }
}



