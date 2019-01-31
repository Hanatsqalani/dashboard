<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bpp;

class BppController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $Bpp = bpp::all();
        return view('admin/bpp', compact('Bpp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Bpp = new bpp;

        $Bpp->keterangan = $request->input('keterangan');
        $Bpp->fotobpp = $request->fotobpp;

        if ($request->hasFile('fotobpp')) {
            # code...
            $file = $request->file('fotobpp');         
            $extension = $file->getClientOriginalExtension();
            $fotobpp = time() . '.' . $extension;
            $file->move('upload/Bpp/', $fotobpp);
            $Bpp->fotobpp = $fotobpp;
        } else{
            return $request;
            $Bpp->keterangan = '';
        }
        $Bpp->save();

        $Bpp = bpp::all();
        return view('admin/bpp', compact('Bpp'));
    }

    public function destroy($id)
    {
        $Bpp = bpp::find($id);
        $Bpp->delete();
        return redirect('admin/bpp')->with('succes', 'Photoevent has been delete');
    }
}
