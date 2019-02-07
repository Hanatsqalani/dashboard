<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\chartefor;

class CharteforController extends Controller
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
      $Chartefor = chartefor::all()->toArray();
        $Chartefor = chartefor::orderBy('id', 'DESC')->get();
        return view('admin/chart', compact('Chartefor'));
    }

    public function store(Request $request)
    {

        $Chartefor = new chartefor();
        $Chartefor->tanggal = $request->input('tanggalefor');
        $Chartefor->target = $request->input('targetefor');
        $Chartefor->realisasi = $request->input('realisasiefor');
        $Chartefor->save();

         $Chartefor = chartefor::all();
        return view('admin/chart', compact('Chartefor'));

    }

    public function destroy($id)
    {
        $Chartefor = chartefor::find($id);
        $Chartefor->delete();
        return redirect('admin/chart')->with('succes', 'pik has been delete');
    }
}
