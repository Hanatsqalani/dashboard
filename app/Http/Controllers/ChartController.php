<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\charteaf;
use App\chartefor;
use App\chartinvestasi;
use App\chartnphr;
use App\chartpemeliharaan;
use App\chartps;

class ChartController extends Controller
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
        $Chartps = chartps::orderBy('tanggal', 'DESC')->get();
        $Charteaf = charteaf::orderBy('tanggal', 'DESC')->get();
        $Chartinvestasi = chartinvestasi::orderBy('tanggal', 'DESC')->get();
        $Chartefor = chartefor::orderBy('tanggal', 'DESC')->get();
        $Chartnphr = chartnphr::orderBy('tanggal', 'DESC')->get();
        $Chartpemeliharaan = chartpemeliharaan::orderBy('tanggal', 'DESC')->get();
        return view('admin/chart', compact('Chartps' , 'Charteaf' , 'Chartinvestasi' , 'Chartefor' , 'Chartnphr' , 'Chartpemeliharaan'));
    }
    
    
    
}