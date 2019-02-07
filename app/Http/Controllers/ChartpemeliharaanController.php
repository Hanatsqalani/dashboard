<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\charteaf;
use App\chartefor;
use App\chartinvestasi;
use App\chartnphr;
use App\chartpemeliharaan;
use App\chartps;

class ChartpemeliharaanController extends Controller
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
        $Chartps = chartps::orderBy('id', 'DESC')->get();
        $Charteaf = charteaf::orderBy('id', 'DESC')->get();
        $Chartinvestasi = chartinvestasi::orderBy('id', 'DESC')->get();
        $Chartefor = chartefor::orderBy('id', 'DESC')->get();
        $Chartnphr = chartnphr::orderBy('id', 'DESC')->get();
        $Chartpemeliharaan = chartpemeliharaan::orderBy('id', 'DESC')->get();
        return view('admin/chart', compact('Chartps' , 'Charteaf' , 'Chartinvestasi' , 'Chartefor' , 'Chartnphr' , 'Chartpemeliharaan'));
    }

    public function store(Request $request)
    {

        $Chartpemeliharaan = new chartpemeliharaan();
        $Chartpemeliharaan->tanggal = $request->input('tanggalpemeliharaan');
        $Chartpemeliharaan->target = $request->input('targetpemeliharaan');
        $Chartpemeliharaan->realisasi = $request->input('realisasipemeliharaan');
        $Chartpemeliharaan->save();

        $Chartps = chartps::all();
        $Charteaf = charteaf::all();
        $Chartinvestasi = chartinvestasi::all();
        $Chartefor = chartefor::all();
        $Chartnphr = chartnphr::all();
        $Chartpemeliharaan = chartpemeliharaan::all();
        return view('admin/chart', compact('Chartps' , 'Charteaf' , 'Chartinvestasi' , 'Chartefor' , 'Chartnphr' , 'Chartpemeliharaan'));

    }

    public function destroy($id)
    {
        $Chartpemeliharaan = chartpemeliharaan::find($id);
        $Chartpemeliharaan->delete();
        return redirect('admin/chart')->with('succes', 'pik has been delete');
    }
}
