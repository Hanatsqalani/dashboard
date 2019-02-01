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
    
}