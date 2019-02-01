<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maintenance;
use App\photomaintenance;
use App\mainprestasi;

class PhotomaintenanceController extends Controller
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
        $maintenance = Maintenance::all()->toArray();
        $maintenance = Maintenance::all();
        $Photomaintenance = photomaintenance::all()->toArray();
        $Photomaintenance = photomaintenance::all();
        $Mainprestasi = mainprestasi::all()->toArray();
        $Mainprestasi = mainprestasi::all();
        return view('admin/maintenance', compact('maintenance', 'Photomaintenance', 'Mainprestasi'));
    }

    public function store(Request $request)
    {
        $Photomaintenance = new photomaintenance;
        $Photomaintenance->filename = $request->filename;
       
        if ($request->hasFile('filename')) {
            # code...
            $file = $request->file('filename');         
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('upload/Photomaintenance/', $filename);
            $Photomaintenance->filename = $filename;
        } else{
            return $request;
            
        }
        $Photomaintenance->save();       
        $maintenance = Maintenance::all()->toArray();
        $maintenance = Maintenance::all();
        $Photomaintenance = photomaintenance::all()->toArray();
        $Photomaintenance = photomaintenance::all();
        $Mainprestasi = mainprestasi::all()->toArray();
        $Mainprestasi = mainprestasi::all();
        return view('admin/maintenance', compact('maintenance', 'Photomaintenance', 'Mainprestasi'));
    }

    public function destroy($id)
    {
        $Photomaintenance = photomaintenance::find($id);
        $Photomaintenance->delete();
        return redirect('admin/maintenance')->with('succes', 'Photoevent has been delete');
    }
}