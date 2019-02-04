<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sppjb;
use App\Anggotasppjb;

class SppjbController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $Sppjb = sppjb::all()->toArray();
        $Sppjb = sppjb::all();
        $anggotasppjb = Anggotasppjb::all()->toArray();
        $anggotasppjb = Anggotasppjb::all();
        return view('admin/sppjb', compact('Sppjb', 'anggotasppjb'));
    }

     public function store(Request $request)
    {
        $Sppjb = new sppjb;

        $Sppjb->filename = $request->filename;

        if ($request->hasFile('filename')) {
            # code...
            $file = $request->file('filename');         
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('upload/Sppjb/', $filename);
            $Sppjb->filename = $filename;
        } else{
            return $request;
            $Sppjb->filename = '';
        }
        $Sppjb->save();

        $Sppjb = sppjb::all()->toArray();
        $Sppjb = sppjb::all();
        $anggotasppjb = Anggotasppjb::all()->toArray();
        $anggotasppjb = Anggotasppjb::all();
        return view('admin/sppjb', compact('Sppjb', 'anggotasppjb'));
    }

    public function destroy($id)
    {
        $Sppjb = sppjb::find($id);
        $Sppjb->delete();
        return redirect('admin/sppjb')->with('succes', 'Sppjb has been delete');
    }
}
