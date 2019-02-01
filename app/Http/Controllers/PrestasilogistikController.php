<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logistik;
use App\photologistik;
use App\logprestasi;

class PrestasilogistikController extends Controller
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
        $Logprestasi = new logprestasi;
        $Logprestasi->nama_prestasi = $request->input('namaprestasi');
        $Logprestasi->tahun_prestasi = $request->input('tahunprestasi');
        $Logprestasi->save();

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
        $Logprestasi = logprestasi::find($id);
        $Logprestasi->delete();
        return redirect('admin/logistik')->with('succes', 'fotoengineering has been delete');
    }
}