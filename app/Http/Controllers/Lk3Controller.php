<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lk3;
use App\Anggotalk3;

class Lk3Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $Lk3 = lk3::all()->toArray();
        $Lk3 = lk3::all();
        $anggotalk3 = Anggotalk3::all()->toArray();
        $anggotalk3 = Anggotalk3::all();
        return view('admin/lk3', compact('Lk3', 'anggotalk3'));
    }

     public function store(Request $request)
    {
        $Lk3 = new lk3;

        $Lk3->filename = $request->filename;

        if ($request->hasFile('filename')) {
            # code...
            $file = $request->file('filename');         
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('upload/Lk3/', $filename);
            $Lk3->filename = $filename;
        } else{
            return $request;
            $lk3->filename = '';
        }
        $Lk3->save();

        $Lk3 = lk3::all()->toArray();
        $Lk3 = lk3::all();
        $anggotalk3 = Anggotalk3::all()->toArray();
        $anggotalk3 = Anggotalk3::all();
        return view('admin/lk3', compact('Lk3', 'anggotalk3'));
    }

    public function destroy($id)
    {
        $Lk3 = lk3::find($id);
        $Lk3->delete();
        return redirect('admin/lk3')->with('succes', 'Bakorsiroh has been delete');
    }
}
