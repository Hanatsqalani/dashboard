<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\chartnphr;

class ChartnphrController extends Controller
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
      $Chartnphr = chartnphr::all()->toArray();
        $Chartnphr = chartnphr::orderBy('id', 'DESC')->get();
        return view('admin/chart', compact('Chartnphr'));
    }

    public function store(Request $request)
    {

        $Chartnphr = new chartnphr();
        $Chartnphr->tanggal = $request->input('tanggalnphr');
        $Chartnphr->target = $request->input('targetnphr');
        $Chartnphr->realisasi = $request->input('realisasinphr');
        $Chartnphr->save();

         $Chartnphr = chartnphr::all();
        return view('admin/chart', compact('Chartnphr'));

    }

    public function destroy($id)
    {
        $Chartnphr = chartnphr::find($id);
        $Chartnphr->delete();
        return redirect('admin/chart')->with('succes', 'pik has been delete');
    }
}
