<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Engineering;
use App\photoengineering;
use App\engineerprestasi;

class PrestasiengineeringController extends Controller
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
        $engineering = Engineering::all()->toArray();
        $engineering = Engineering::all();
        $Photoengineering = photoengineering::all()->toArray();
        $Photoengineering = photoengineering::all();
        $Engineerprestasi = engineerprestasi::all()->toArray();
        $Engineerprestasi = engineerprestasi::all();
        return view('admin/engineering', compact('engineering', 'Photoengineering', 'Engineerprestasi'));
    }

    public function store(Request $request)
    {
        $Engineerprestasi = new engineerprestasi;
        $Engineerprestasi->nama_prestasi = $request->input('namaprestasi');
        $Engineerprestasi->tahun_prestasi = $request->input('tahunprestasi');
        $Engineerprestasi->save();

        $engineering = Engineering::all()->toArray();
        $engineering = Engineering::all();
        $Photoengineering = photoengineering::all()->toArray();
        $Photoengineering = photoengineering::all();
        $Engineerprestasi = engineerprestasi::all()->toArray();
        $Engineerprestasi = engineerprestasi::all();
        return view('admin/engineering', compact('engineering', 'Photoengineering', 'Engineerprestasi'));
    }

    public function destroy($id)
    {
        $Engineerprestasi = engineerprestasi::find($id);
        $Engineerprestasi->delete();
        return redirect('admin/engineering')->with('succes', 'fotoengineering has been delete');
    }
}