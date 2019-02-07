<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\csr;

class CsrController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $Csr = csr::all();
        return view('admin/csr', compact('Csr'));
    }

     public function store(Request $request)
    {
        $Csr = new csr;

        $Csr->namakegiatan = $request->input('namakegiatan');
        $Csr->lokasikegiatan = $request->input('lokasikegiatan');
        $Csr->tanggalkegiatan = $request->input('tanggalkegiatan');
        $Csr->fotocsr = $request->fotocsr;

        if ($request->hasFile('fotocsr')) {
            # code...
            $file = $request->file('fotocsr');         
            $extension = $file->getClientOriginalExtension();
            $fotocsr = time() . '.' . $extension;
            $file->move('upload/Csr/', $fotocsr);
            $Csr->fotocsr = $fotocsr;
        } else{
            return $request;
            $Csr->namakegiatan = '';
            $Csr->lokasikegiatan = '';
            $Csr->tanggalkegiatan = '';
        }
        $Csr->save();

        $Csr = csr::all();
        return view('admin/csr', compact('Csr'));
    }

    public function destroy($id)
    {
        $Csr = csr::find($id);
        $Csr->delete();
        return redirect('admin/csr')->with('succes', 'Csr has been delete');
    }
}
