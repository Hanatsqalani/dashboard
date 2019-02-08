<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operation;
use App\photooperation;
use App\operationprestasi;
use App\kboperation;


class KaryawanoperationController extends Controller
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
        return view('admin/operation', compact('operation'));
    }
    
    public function store(Request $request)
    {
        $operation = new Operation;
        $operation->id_karyawan = $request->input('idkaryawan');
        $operation->nama_karyawan = $request->input('namakaryawan');
        $operation->jabatan = $request->input('jabatan');
        $operation->pendidikan = $request->input('pendidikan');
        $operation->save();

        $operation = Operation::all()->toArray();
        $operation = Operation::all();
        $Photooperation = photooperation::all()->toArray();
        $Photooperation = photooperation::all();
        $prestasi = operationprestasi::all()->toArray();
        $prestasi = operationprestasi::all();
        $Kboperation = kboperation::all();
        return view('admin/operation', compact('operation', 'Photooperation', 'prestasi', 'Kboperation'));;
    }

    public function destroy($id)
    {
        $operation = Operation::find($id);
        $operation->delete();
        return redirect('admin/operation')->with('succes', 'Photoevent has been delete');
    }
}