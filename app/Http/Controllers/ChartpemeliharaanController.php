<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\chartpemeliharaan;

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
      $Chartpemeliharaan = chartpemeliharaan::all()->toArray();
        $Chartpemeliharaan = chartpemeliharaan::orderBy('id', 'DESC')->get();
        return view('admin/chart', compact('Chartpemeliharaan'));
    }

    public function store(Request $request)
    {

        $Chartpemeliharaan = new chartpemeliharaan();
        $Chartpemeliharaan->tanggal = $request->input('tanggalpemeliharaan');
        $Chartpemeliharaan->target = $request->input('targetpemeliharaan');
        $Chartpemeliharaan->realisasi = $request->input('realisasipemeliharaan');
        $Chartpemeliharaan->save();

         $Chartpemeliharaan = chartpemeliharaan::all();
        return view('admin/chart', compact('Chartpemeliharaan'));

    }

    public function destroy($id)
    {
        $Chartpemeliharaan = chartpemeliharaan::find($id);
        $Chartpemeliharaan->delete();
        return redirect('admin/chart')->with('succes', 'pik has been delete');
    }
}
