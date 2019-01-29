<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bakorsiroh;

class BakorsirohController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
    	$Bakorsiroh = bakorsiroh::all();
    	return view('admin/bakorsiroh', compact('Bakorsiroh'));
    }

     public function store(Request $request)
    {
        $Bakorsiroh = new bakorsiroh;

        $Bakorsiroh->filename = $request->filename;

        if ($request->hasFile('filename')) {
            # code...
            $file = $request->file('filename');         
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('upload/Bakorsiroh/', $filename);
            $Bakorsiroh->filename = $filename;
        } else{
            return $request;
            $Bakorsiroh->filename = '';
        }
        $Bakorsiroh->save();

        $Bakorsiroh = bakorsiroh::all();
        return view('admin/bakorsiroh', compact('Bakorsiroh'));
    }
}
