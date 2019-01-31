<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Engineering;
use App\photoengineering;
use App\engineerprestasi;

class EngineeringController extends Controller
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
        return view('admin/engineering', compact('engineering'));
    }

    public function store(Request $request)
    {
        $engineering = new Engineering;

        $Photoengineering->filename = $request->filename;
        $engineering->id_karyawan = $request->input('idkaryawan');
        $engineering->nama_karyawan = $request->input('namakaryawan');
        $engineering->jabatan = $request->input('jabatan');
        $Engineerprestasi->nama_prestasi = $request->input('namaprestasi');
        $Engineerprestasi->tahun_prestasi = $request->input('tahunprestasi');

        if ($request->hasFile('fotoengineering')) {
            # code...
            $file = $request->file('fotoengineering');         
            $extension = $file->getClientOriginalExtension();
            $fotoengineering = time() . '.' . $extension;
            $file->move('upload/Photoengineering/', $fotoengineering);
            $Photoengineering->fotoengineering = $fotoengineering;
        } else{
            return $request;
            
        }
        $engineering->save();

        $engineering = Engineering::all();
        return view('admin/engineering', compact('engineering'));
    }

    public function destroy($id)
    {
        $engineering = Engineering::find($id);
        $engineering->delete();
        return redirect('admin/engineering')->with('succes', 'fotoengineering has been delete');
    }
}