<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\chartinvestasi;

class ChartpsController extends Controller
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
      $Chartinvestasi = chartinvestasi::all()->toArray();
        $Chartinvestasi = chartinvestasi::orderBy('id', 'DESC')->get();
        return view('admin/chart', compact('Chartinvestasi'));
    }

    public function store(Request $request)
    {

        $Chartinvestasi = new chartinvestasi();
        $Chartinvestasi->tanggal = $request->input('tanggalinvestasi');
        $Chartinvestasi->target = $request->input('targetinvestasi');
        $Chartinvestasi->realisasi = $request->input('realisasiinvestasi');
        $Chartinvestasi->save();

         $Chartinvestasi = chartinvestasi::all();
        return view('admin/chart', compact('Chartinvestasi'));

    }

    public function destroy($id)
    {
        $Chartinvestasi = chartinvestasi::find($id);
        $Chartinvestasi->delete();
        return redirect('admin/chart')->with('succes', 'pik has been delete');
    }
}
