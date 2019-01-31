<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operation;
use App\photooperation;
use App\operationprestasi;

class OperationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $operation = Operation::all()->toArray();
        $operation = Operation::all();
        $Photooperation = photooperation::all()->toArray();
        $Photooperation = photooperation::all();
        $prestasi = operationprestasi::all()->toArray();
        $prestasi = operationprestasi::all()->toArray();
        return view('admin/operation', compact('operation'));
    }

    public function store(Request $request)
    {
        $operation = new Operation;

        $Photooperation->filename = $request->filename;
        $operation->id_karyawan = $request->input('idkaryawan');
        $operation->nama_karyawan = $request->input('namakaryawan');
        $operation->jabatan = $request->input('jabatan');
        $prestasi->nama_prestasi = $request->input('namaprestasi');
        $prestasi->tahun_prestasi = $request->input('tahunprestasi');

        if ($request->hasFile('fotooperation')) {
            # code...
            $file = $request->file('fotooperation');         
            $extension = $file->getClientOriginalExtension();
            $fotooperation = time() . '.' . $extension;
            $file->move('upload/Photooperation/', $fotooperation);
            $operation->fotooperation = $fotooperation;
        } else{
            return $request;
            
        }
        $operation->save();

        $operation = Operation::all();
        return view('admin/operation', compact('operation'));
    }

    public function destroy($id)
    {
        $operation = Operation::find($id);
        $operation->delete();
        return redirect('admin/operation')->with('succes', 'Photoevent has been delete');
    }
}