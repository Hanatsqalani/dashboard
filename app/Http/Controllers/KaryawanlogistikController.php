<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logistik;
use App\photologistik;
use App\logprestasi;

class KaryawanlogistikController extends Controller
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
        $logistik = Logistik::all()->toArray();
        $logistik = Logistik::all();
        $Photologistik = photologistik::all()->toArray();
        $Photologistik = photologistik::all();
        $Logprestasi = logprestasi::all()->toArray();
        $Logprestasi = logprestasi::all();
        return view('admin/logistik', compact('logistik', 'Photologistik', 'Logprestasi'));
    }

    public function store(Request $request)
    {
        $logistik = new Logistik;

        $logistik->id_karyawan = $request->input('idkaryawan');
        $logistik->nama_karyawan = $request->input('namakaryawan');
        $logistik->jabatan = $request->input('jabatan');
        $logistik->save();

        $logistik = Logistik::all()->toArray();
        $logistik = Logistik::all();
        $Photologistik = photologistik::all()->toArray();
        $Photologistik = photologistik::all();
        $Logprestasi = logprestasi::all()->toArray();
        $Logprestasi = logprestasi::all();
        return view('admin/logistik', compact('logistik', 'Photologistik', 'Logprestasi'));
    }

    public function destroy($id)
    {
        $logistik = Logistik::find($id);
        $logistik->delete();
        return redirect('admin/logistik')->with('succes', 'fotoengineering has been delete');
    }
}