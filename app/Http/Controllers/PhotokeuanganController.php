<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Keuangan;
use App\photokeuangan;
use App\keuanganprestasi;

class PhotokeuanganController extends Controller
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
        $Photokeuangan = new photokeuangan;

        $Photokeuangan->filename = $request->filename;
        if ($request->hasFile('filename')) {
            # code...
            $file = $request->file('filename');         
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('upload/Photokeuangan/', $filename);
            $Photokeuangan->filename = $filename;
        } else{
            return $request;
            
        }
        $Photokeuangan->save();

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
        $photokeuangan = photokeuangan::find($id);
        $photokeuangan->delete();
        return redirect('admin/keuangan')->with('succes', 'fotoengineering has been delete');
    }
}



