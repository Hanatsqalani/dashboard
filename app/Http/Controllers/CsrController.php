<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\csr;
use App\Anggotacsr;

class CsrController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $Csr = csr::all()->toArray();
        $Csr = csr::all();
        $anggotacsr = Anggotacsr::all()->toArray();
        $anggotacsr = Anggotacsr::all();
        return view('admin/csr', compact('Csr', 'anggotacsr'));
    }

     public function store(Request $request)
    {
        $Csr = new csr;

        $Csr->filename = $request->filename;

        if ($request->hasFile('filename')) {
            # code...
            $file = $request->file('filename');         
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('upload/Csr/', $filename);
            $Csr->filename = $filename;
        } else{
            return $request;
            $Csr->filename = '';
        }
        $Csr->save();

        $Csr = csr::all()->toArray();
        $Csr = csr::all();
        $anggotacsr = Anggotacsr::all()->toArray();
        $anggotacsr = Anggotacsr::all();
        return view('admin/csr', compact('Csr', 'anggotacsr'));
    }

    public function destroy($id)
    {
        $Csr = csr::find($id);
        $Csr->delete();
        return redirect('admin/csr')->with('succes', 'Csr has been delete');
    }
}
