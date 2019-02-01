<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bakorsiroh;
use App\anggotabakorsiroh;

class BakorsirohController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
    	$Bakorsiroh = bakorsiroh::all()->toArray();
        $Bakorsiroh = bakorsiroh::all();
        $Anggotabakorsiroh = anggotabakorsiroh::all()->toArray();
        $Anggotabakorsiroh = anggotabakorsiroh::all();
        return view('admin/bakorsiroh', compact('Bakorsiroh', 'Anggotabakorsiroh'));
    }

     public function store(Request $request)
    {
        $Bakorsiroh = new bakorsiroh;

        $Bakorsiroh->filename = $request->filename;

        if ($request->hasFile('filename')) {
            # code...
            $file = $request->file('filename');         
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('upload/Bakorsiroh/', $filename);
            $Bakorsiroh->filename = $filename;
        } else{
            return $request;
            $Bakorsiroh->filename = '';
        }
        $Bakorsiroh->save();

        $Bakorsiroh = bakorsiroh::all()->toArray();
        $Bakorsiroh = bakorsiroh::all();
        $Anggotabakorsiroh = anggotabakorsiroh::all()->toArray();
        $Anggotabakorsiroh = anggotabakorsiroh::all();
        return view('admin/bakorsiroh', compact('Bakorsiroh', 'Anggotabakorsiroh'));
    }

    public function destroy($id)
    {
        $Bakorsiroh = bakorsiroh::find($id);
        $Bakorsiroh->delete();
        return redirect('admin/bakorsiroh')->with('succes', 'Bakorsiroh has been delete');
    }
}
