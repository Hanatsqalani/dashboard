<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Keuangan;
use App\photokeuangan;
use App\keuanganprestasi;

class PrestasikeuanganController extends Controller
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
        $Keuanganprestasi = new keuanganprestasi;
        $Keuanganprestasi->nama_prestasi = $request->input('namaprestasi');
        $Keuanganprestasi->tahun_prestasi = $request->input('tahunprestasi');
        $Keuanganprestasi->save();

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
        $Keuanganprestasi = keuanganprestasi::find($id);
        $Keuanganprestasi->delete();
        return redirect('admin/keuangan')->with('succes', 'fotoengineering has been delete');
    }
}



