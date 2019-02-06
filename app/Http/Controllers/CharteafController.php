<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\charteaf;

class CharteafController extends Controller
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
      $Charteaf = charteaf::all()->toArray();
        $Charteaf = charteaf::orderBy('id', 'DESC')->get();
        return view('admin/chart', compact('Charteaf'));
    }

    public function store(Request $request)
    {

        $Charteaf = new charteaf();
        $Charteaf->tanggal = $request->input('tanggaleaf');
        $Charteaf->target = $request->input('targeteaf');
        $Charteaf->realisasi = $request->input('realisasieaf');
        $Charteaf->save();

         $Charteaf = charteaf::all();
        return view('admin/chart', compact('Charteaf'));

    }

    public function destroy($id)
    {
        $Charteaf = charteaf::find($id);
        $Charteaf->delete();
        return redirect('admin/chart')->with('succes', 'pik has been delete');
    }
}
