<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pik;
use App\Anggotapik;

class PikController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $Pik = pik::all()->toArray();
        $Pik = pik::all();
        $anggotapik = Anggotapik::all()->toArray();
        $anggotapik = Anggotapik::all();
        return view('admin/pik', compact('Pik', 'anggotapik'));
    }

     public function store(Request $request)
    {
        $Pik = new pik;

        $Pik->filename = $request->filename;

        if ($request->hasFile('filename')) {
            # code...
            $file = $request->file('filename');         
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('upload/Pik/', $filename);
            $Pik->filename = $filename;
        } else{
            return $request;
            $pik->filename = '';
        }
        $Pik->save();

        $Pik = pik::all()->toArray();
        $Pik = pik::all();
        $anggotapik = Anggotapik::all()->toArray();
        $anggotapik = Anggotapik::all();
        return view('admin/pik', compact('Pik', 'anggotapik'));
    }

    public function destroy($id)
    {
        $Pik = pik::find($id);
        $Pik->delete();
        return redirect('admin/pik')->with('succes', 'Bakorsiroh has been delete');
    }
}
