<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operation;
use App\photooperation;
use App\operationprestasi;


class PhotooperationController extends Controller
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
       
        $Photooperation = photooperation::all()->toArray();
        $Photooperation = photooperation::all();
        return view('admin/operation', compact('Photooperation'));
    }

    
    public function store(Request $request)
    {
        $operation = new Operation;
        $Photooperation = new photooperation;
        $prestasi = new operationprestasi;

        $Photooperation->filename = $request->filename;

        if ($request->hasFile('filename')) {
            # code...
            $file = $request->file('filename');         
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('upload/Photooperation/', $filename);
            $Photooperation->filename = $filename;
        } else{
            return $request;
            $Photooperation->filename = '';
        }
        $Photooperation->save();

        $operation = Operation::all()->toArray();
        $operation = Operation::all();
        $Photooperation = photooperation::all()->toArray();
        $Photooperation = photooperation::all();
        $prestasi = operationprestasi::all()->toArray();
        $prestasi = operationprestasi::all();
        return view('admin/operation', compact('operation', 'Photooperation', 'prestasi'));
    }
    
     public function destroy($id)
    {
        $Photooperation = photooperation::find($id);
        $Photooperation->delete();
        return redirect('admin/operation')->with('succes', 'Photoevent has been delete');
    }
    
}