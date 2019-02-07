<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lk3;

class Lk3Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $Lk3 = lk3::all();
        return view('admin/lk3', compact('Lk3'));
    }

     public function store(Request $request)
    {
        $Lk3 = new lk3;

        $Lk3->namakegiatan = $request->input('namakegiatan');
        $Lk3->lokasikegiatan = $request->input('lokasikegiatan');
        $Lk3->tanggalkegiatan = $request->input('tanggalkegiatan');
        $Lk3->fotolk3 = $request->fotolk3;

        if ($request->hasFile('fotolk3')) {
            # code...
            $file = $request->file('fotolk3');         
            $extension = $file->getClientOriginalExtension();
            $fotolk3 = time() . '.' . $extension;
            $file->move('upload/Lk3/', $fotolk3);
            $Lk3->fotolk3 = $fotolk3;
        } else{
            return $request;
            $Csr->namakegiatan = '';
            $Csr->lokasikegiatan = '';
            $Csr->tanggalkegiatan = '';
        }
        $Lk3->save();

        $Lk3 = lk3::all();
        return view('admin/lk3', compact('Lk3'));
    }

    public function destroy($id)
    {
        $Lk3 = lk3::find($id);
        $Lk3->delete();
        return redirect('admin/lk3')->with('succes', 'Bakorsiroh has been delete');
    }
}
