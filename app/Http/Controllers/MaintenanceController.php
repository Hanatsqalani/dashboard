<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maintenance;

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
        return view('admin/maintenance', compact('maintenance'));
    }

    public function store(Request $request)
    {
        $maintenance = new Maintenance;

        $maintenance->foto_maintenance = $request->foto_maintenance;
        $maintenance->id_karyawan = $request->input('idkaryawan');
        $maintenance->nama_karyawan = $request->input('namakaryawan');
        $maintenance->jabatan = $request->input('jabatan');
        $maintenance->nama_prestasi = $request->input('namaprestasi');
        $maintenance->tahun_prestasi = $request->input('tahunprestasi');

        if ($request->hasFile('fotomaintenance')) {
            # code...
            $file = $request->file('fotomaintenance');         
            $extension = $file->getClientOriginalExtension();
            $fotomaintenance = time() . '.' . $extension;
            $file->move('upload/Photomaintenance/', $fotomaintenance);
            $maintenance->fotomaintenance = $fotomaintenance;
        } else{
            return $request;
            
        }
        $maintenance->save();

        $maintenance = Maintenance::all();
        return view('admin/maintenance', compact('maintenance'));
    }

    public function destroy($id)
    {
        $maintenance = Maintenance::find($id);
        $maintenance->delete();
        return redirect('admin/maintenance')->with('succes', 'Photoevent has been delete');
    }
}