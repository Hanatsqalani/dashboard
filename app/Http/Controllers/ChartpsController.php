<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\chartps;

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
      $Chartps = chartps::all()->toArray();
        $Chartps = chartps::orderBy('id', 'DESC')->get();
        return view('admin/chart', compact('Chartps'));
    }

    public function store(Request $request)
    {

        $Chartps = new chartps();
        $Chartps->tanggal = $request->input('tanggalps');
        $Chartps->target = $request->input('targetps');
        $Chartps->realisasi = $request->input('realisasips');
        $Chartps->save();

         $Chartps = chartps::all();
        return view('admin/chart', compact('Chartps'));

    }

    public function destroy($id)
    {
        $Chartps = chartps::find($id);
        $Chartps->delete();
        return redirect('admin/chart')->with('succes', 'pik has been delete');
    }
}
