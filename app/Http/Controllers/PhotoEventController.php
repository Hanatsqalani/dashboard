<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\photoevent;

class PhotoEventController extends Controller
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
        $Photoevent = photoevent::all();
        return view('admin/photosevent', compact('Photoevent'));
    }

    public function store(Request $request)
    {
        $Photoevent = new photoevent;

        $Photoevent->filename = $request->filename;

        if ($request->hasFile('filename')) {
            # code...
            $file = $request->file('filename');         
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('upload/Photoevent/', $filename);
            $Photoevent->filename = $filename;
        } else{
            return $request;
            $Photoevent->filename = '';
        }
        $Photoevent->save();

        $Photoevent = photoevent::all();
        return view('admin/photosevent', compact('Photoevent'));
    }

}