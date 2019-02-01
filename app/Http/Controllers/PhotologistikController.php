<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logistik;
use App\photologistik;
use App\logprestasi;

class PhotologistikController extends Controller
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
        $logistik = Logistik::all()->toArray();
        $logistik = Logistik::all();
        $Photologistik = photologistik::all()->toArray();
        $Photologistik = photologistik::all();
        $Logprestasi = logprestasi::all()->toArray();
        $Logprestasi = logprestasi::all();
        return view('admin/logistik', compact('logistik', 'Photologistik', 'Logprestasi'));
    }

    public function store(Request $request)
    {
        $Photologistik = new photologistik;

        $Photologistik->filename = $request->filename;
    
        if ($request->hasFile('filename')) {
            # code...
            $file = $request->file('filename');         
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('upload/Photologistik/', $filename);
            $Photologistik->filename = $filename;
        } else{
            return $request;
            
        }
        $Photologistik->save();

        $logistik = Logistik::all()->toArray();
        $logistik = Logistik::all();
        $Photologistik = photologistik::all()->toArray();
        $Photologistik = photologistik::all();
        $Logprestasi = logprestasi::all()->toArray();
        $Logprestasi = logprestasi::all();
        return view('admin/logistik', compact('logistik', 'Photologistik', 'Logprestasi'));
    }

    public function destroy($id)
    {
        $Photologistik = photologistik::find($id);
        $Photologistik->delete();
        return redirect('admin/logistik')->with('succes', 'fotoengineering has been delete');
    }
}