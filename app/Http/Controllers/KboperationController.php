<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kboperation;
use App\Operation;
use App\photooperation;
use App\operationprestasi;

class KboperationController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $Kboperation = kboperation::all();
        return view('admin/operation', compact('Kboperation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Kboperation = new kboperation;

        $Kboperation->keterangan = $request->input('keterangan');
        $Kboperation->fotooperation = $request->fotooperation;

        if ($request->hasFile('fotooperation')) {
            # code...
            $file = $request->file('fotooperation');         
            $extension = $file->getClientOriginalExtension();
            $fotooperation = time() . '.' . $extension;
            $file->move('upload/Kboperation/', $fotooperation);
            $Kboperation->fotooperation = $fotooperation;
        } else{
            return $request;
            $Kboperation->keterangan = '';
        }
        $Kboperation->save();

        $operation = Operation::all()->toArray();
        $operation = Operation::all();
        $Photooperation = photooperation::all()->toArray();
        $Photooperation = photooperation::all();
        $prestasi = operationprestasi::all()->toArray();
        $prestasi = operationprestasi::all();
        $Kboperation = kboperation::all();
        return view('admin/operation', compact('operation', 'Photooperation', 'prestasi', 'Kboperation'));
    }

    public function destroy($id)
    {
        $Kboperation = kboperation::find($id);
        $Kboperation->delete();
        return redirect('admin/operation')->with('succes', 'Photoevent has been delete');
    }
}
