<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Engineering;
use App\photoengineering;
use App\engineerprestasi;

class KaryawanengineeringController extends Controller
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
        $engineering = new Engineering;
        $engineering->id_karyawan = $request->input('idkaryawan');
        $engineering->nama_karyawan = $request->input('namakaryawan');
        $engineering->jabatan = $request->input('jabatan');

        $engineering->save();

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
        $engineering = Engineering::find($id);
        $engineering->delete();
        return redirect('admin/engineering')->with('succes', 'fotoengineering has been delete');
    }
}