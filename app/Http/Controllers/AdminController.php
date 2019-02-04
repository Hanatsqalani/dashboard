<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\photointro;

class AdminController extends Controller
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
        $Photointro = photointro::all()->toArray();
        $Photointro = photointro::all();
        return view('admin/photosintro', compact('Photointro'));
    }

    public function store(Request $request)
    {
        $Photointro = new photointro;

        $Photointro->filename = $request->filename;

        if ($request->hasFile('filename')) {
            # code...
            $file = $request->file('filename');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('upload/Photointro/', $filename);
            $Photointro->filename = $filename;
        } else{
            return $request;
            $Photointro->filename = '';
        }
        $Photointro->save();

        $Photointro = photointro::all();
        return view('admin/photosintro', compact('Photointro'));
    }

    public function destroy($id)
    {
        $Photointro = photointro::find($id);
        $Photointro->delete();
        return redirect('admin')->with('succes', 'Photoevent has been delete');
    }
}
