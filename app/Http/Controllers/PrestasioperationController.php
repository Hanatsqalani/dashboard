<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operation;
use App\photooperation;
use App\operationprestasi;
use App\kboperation;

class PrestasioperationController extends Controller
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
        
        $prestasi = operationprestasi::all()->toArray();
        $prestasi = operationprestasi::all();
        return view('admin/operation', compact('prestasi'));
    }

    
    public function store(Request $request)
    {
        $prestasi = new operationprestasi;
        
        $prestasi->namaprestasi = $request->input('namaprestasi');
        $prestasi->tahunprestasi = $request->input('tahunprestasi'); 

        $prestasi->save();
        $operation = Operation::all()->toArray();
        $operation = Operation::all();
        $Photooperation = photooperation::all()->toArray();
        $Photooperation = photooperation::all();
        $prestasi = operationprestasi::all()->toArray();
        $prestasi = operationprestasi::all();
        $Kboperation = kboperation::all();
        return view('admin/operation', compact('operation', 'Photooperation', 'prestasi'));
    }

     public function destroy($id)
    {
        $prestasi = operationprestasi::find($id);
        $prestasi->delete();
        return redirect('admin/operation')->with('succes', 'Photoevent has been delete');
    }
}