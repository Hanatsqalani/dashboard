<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sppjbservice;
use App\Anggotasppjbservice;

class SppjbsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $Sppjbs = sppjbservice::all()->toArray();
        $Sppjbs = sppjbservice::all();
        $anggotasppjbs = Anggotasppjbservice::all()->toArray();
        $anggotasppjbs = Anggotasppjbservice::all();
        return view('admin/sppjbs', compact('Sppjbs', 'anggotasppjbs'));
    }

     public function store(Request $request)
    {
        $Sppjbs = new sppjbservice;

        $Sppjbs->filename = $request->filename;

        if ($request->hasFile('filename')) {
            # code...
            $file = $request->file('filename');         
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('upload/Sppjbs/', $filename);
            $Sppjbs->filename = $filename;
        } else{
            return $request;
            $Sppjbs->filename = '';
        }
        $Sppjbs->save();

        $Sppjbs = sppjbservice::all()->toArray();
        $Sppjbs = sppjbservice::all();
        $anggotasppjbs = Anggotasppjbservice::all()->toArray();
        $anggotasppjbs = Anggotasppjbservice::all();
        return view('admin/sppjbs', compact('Sppjbs', 'anggotasppjbs'));
    }

    public function destroy($id)
    {
        $Sppjbs = sppjbservice::find($id);
        $Sppjbs->delete();
        return redirect('admin/sppjbs')->with('succes', 'Sppjbs has been delete');
    }
}
