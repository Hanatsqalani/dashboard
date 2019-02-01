<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maintenance;
use App\photomaintenance;
use App\mainprestasi;

class MaintenanceController extends Controller
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
        $maintenance = new Maintenance;
        $Mainprestasi = new photomaintenance;

        $Photomaintenance->filename = $request->filename;
        $maintenance->id_karyawan = $request->input('idkaryawan');
        $maintenance->nama_karyawan = $request->input('namakaryawan');
        $maintenance->jabatan = $request->input('jabatan');
        $Mainprestasi->nama_prestasi = $request->input('namaprestasi');
        $Mainprestasi->tahun_prestasi = $request->input('tahunprestasi');

        if ($request->hasFile('fotomaintenance')) {
            # code...
            $file = $request->file('fotomaintenance');         
            $extension = $file->getClientOriginalExtension();
            $fotomaintenance = time() . '.' . $extension;
            $file->move('upload/Photomaintenance/', $fotomaintenance);
            $Photomaintenance->fotomaintenance = $fotomaintenance;
        } else{
            return $request;
            
        }
        $Photomaintenance->save();
        $maintenance->save();
        $Mainprestasi->save();

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
        $maintenance = Maintenance::find($id);
        $maintenance->delete();
        return redirect('admin/maintenance')->with('succes', 'Photoevent has been delete');
    }
}